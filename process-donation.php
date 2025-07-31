<?php
require_once 'includes/pesapal-integration.php';

if ($_POST) {
    $amount = floatval($_POST['amount']);
    $donor_name = htmlspecialchars($_POST['donor_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    
    // Generate unique reference
    $reference = 'NALEPO_' . time() . '_' . mt_rand(1000, 9999);
    
    // Create description
    $description = "Donation to NALEPO from " . $donor_name;
    if (!empty($message)) {
        $description .= " - " . $message;
    }
    
    // Initialize PesaPal
    $pesapal = new PesaPalIntegration();
    
    // Generate payment URL
    $payment_url = $pesapal->generatePaymentUrl($amount, $description, $reference, $email, $phone);
    
    // Store donation details in session
    session_start();
    $_SESSION['donation_details'] = array(
        'reference' => $reference,
        'amount' => $amount,
        'donor_name' => $donor_name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'timestamp' => date('Y-m-d H:i:s')
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Donation - NALEPO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'maasai-red': '#B91C1C',
                        'earth-brown': '#92400E',
                        'savanna-green': '#059669',
                        'sunset-orange': '#EA580C',
                        'warm-beige': '#FEF3C7'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full space-y-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Complete Your Donation</h2>
                <p class="text-lg text-gray-600 mb-2">Donor: <strong><?php echo $donor_name; ?></strong></p>
                <p class="text-lg text-gray-600 mb-6">Amount: <strong>$<?php echo number_format($amount, 2); ?></strong></p>
                <p class="text-sm text-gray-500 mb-8">Reference: <?php echo $reference; ?></p>
            </div>
            
            <!-- PesaPal Payment Iframe -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-center mb-4">
                    <p class="text-gray-700">Please complete your payment using the secure form below:</p>
                </div>
                
                <div class="iframe-container" style="position: relative; width: 100%; height: 600px; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
                    <iframe 
                        src="<?php echo $payment_url; ?>"
                        width="100%" 
                        height="600"
                        frameborder="0"
                        scrolling="auto"
                        style="border: none;"
                        title="PesaPal Payment Form">
                    </iframe>
                </div>
                
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-500 mb-4">Having trouble? You can also <a href="<?php echo $payment_url; ?>" target="_blank" class="text-maasai-red hover:underline">open payment in new window</a></p>
                    <a href="get-involved.php" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                        ← Back to Donation Form
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Handle iframe communication
        window.addEventListener('message', function(event) {
            if (event.origin !== 'https://www.pesapal.com') return;
            
            // Handle payment completion
            if (event.data && event.data.status) {
                if (event.data.status === 'completed') {
                    window.location.href = 'payment-callback.php?status=completed&reference=<?php echo $reference; ?>';
                } else if (event.data.status === 'failed') {
                    window.location.href = 'payment-callback.php?status=failed&reference=<?php echo $reference; ?>';
                }
            }
        });
        
        // Auto-resize iframe if needed
        function resizeIframe() {
            const iframe = document.querySelector('iframe');
            if (iframe) {
                iframe.style.height = '600px';
            }
        }
        
        // Call resize on load
        window.addEventListener('load', resizeIframe);
    </script>
</body>
</html>
<?php
} else {
    // Redirect back to donation page if accessed directly
    header('Location: get-involved.php');
    exit;
}
?>

// Update the callback URL for your live domain
$callback_url = 'https://nalepoorga.com/payment-callback'; // Change this to your actual domain
// For local testing, use: 'http://localhost/Nalepo/payment-callback'