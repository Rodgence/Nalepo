<?php
require_once 'includes/pesapal-integration.php';

session_start();

$pesapal_transaction_tracking_id = $_GET['pesapal_transaction_tracking_id'] ?? '';
$pesapal_merchant_reference = $_GET['pesapal_merchant_reference'] ?? '';

if (!empty($pesapal_transaction_tracking_id) && !empty($pesapal_merchant_reference)) {
    $pesapal = new PesaPalIntegration();
    $status = $pesapal->queryPaymentStatus($pesapal_merchant_reference, $pesapal_transaction_tracking_id);
    
    // Parse status response
    $status_parts = explode(',', $status);
    $payment_status = trim($status_parts[0] ?? '');
    
    if ($payment_status === 'COMPLETED') {
        // Payment successful
        $success_message = "Thank you for your donation! Your payment has been processed successfully.";
        $donation_details = $_SESSION['donation_details'] ?? null;
        
        // Here you can save to database, send confirmation emails, etc.
        
    } else if ($payment_status === 'PENDING') {
        // Payment pending
        $success_message = "Your payment is being processed. You will receive a confirmation once completed.";
    } else {
        // Payment failed
        $error_message = "Payment was not completed. Please try again.";
    }
}

$page_title = "Payment Status";
include 'includes/header.php';

// Handle mock payment
if (isset($_GET['mock']) && $_GET['mock'] === 'true') {
    $status = $_GET['status'] ?? 'failed';
    $reference = $_GET['reference'] ?? 'unknown';
    $amount = $_GET['amount'] ?? '0';
?>

<div class="min-h-screen flex items-center justify-center py-12 px-4">
    <div class="max-w-md w-full space-y-8 text-center">
        <?php if ($status === 'success'): ?>
            <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                <i class="fas fa-check-circle text-green-500 text-4xl mb-4"></i>
                <h2 class="text-2xl font-bold text-green-800 mb-2">Payment Successful!</h2>
                <p class="text-green-700 mb-4">Thank you for your donation of $<?php echo htmlspecialchars($amount); ?></p>
                <p class="text-sm text-green-600">Reference: <?php echo htmlspecialchars($reference); ?></p>
            </div>
        <?php else: ?>
            <div class="bg-red-50 border border-red-200 rounded-lg p-6">
                <i class="fas fa-times-circle text-red-500 text-4xl mb-4"></i>
                <h2 class="text-2xl font-bold text-red-800 mb-2">Payment Failed</h2>
                <p class="text-red-700 mb-4">There was an issue processing your payment.</p>
            </div>
        <?php endif; ?>
        
        <div class="space-y-4">
            <a href="index.php" class="bg-maasai-red hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-block">Back to Home</a>
            <a href="get-involved.php" class="bg-savanna-green hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 inline-block">Make Another Donation</a>
        </div>
    </div>
</div>

<?php
}
include 'includes/footer.php';
?>
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <?php if (isset($success_message)): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    <h2 class="text-2xl font-bold mb-4">Payment Successful!</h2>
                    <p><?php echo $success_message; ?></p>
                    <?php if (isset($donation_details)): ?>
                        <div class="mt-4 text-left bg-white p-4 rounded">
                            <h3 class="font-bold mb-2">Donation Details:</h3>
                            <p><strong>Reference:</strong> <?php echo $donation_details['reference']; ?></p>
                            <p><strong>Amount:</strong> $<?php echo number_format($donation_details['amount'], 2); ?></p>
                            <p><strong>Donor:</strong> <?php echo $donation_details['donor_name']; ?></p>
                            <p><strong>Date:</strong> <?php echo $donation_details['timestamp']; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php elseif (isset($error_message)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <h2 class="text-2xl font-bold mb-4">Payment Failed</h2>
                    <p><?php echo $error_message; ?></p>
                </div>
            <?php endif; ?>
            
            <div class="space-x-4">
                <a href="index.php" class="bg-maasai-red hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">Back to Home</a>
                <a href="get-involved.php" class="bg-savanna-green hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">Make Another Donation</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>