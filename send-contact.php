<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer (you'll need to download this)
require 'vendor/autoload.php'; // If using Composer
// OR include manually:
// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

if ($_POST) {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $newsletter = isset($_POST['newsletter']) ? 'Yes' : 'No';
    
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'mail.nalepoorga.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@nalepoorga.com';
        $mail->Password   = 'YOUR_EMAIL_PASSWORD'; // Use the actual password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 465; // Use 465 for SSL or 587 for TLS
        
        // Recipients
        $mail->setFrom('info@nalepoorga.com', 'NALEPO Contact Form');
        $mail->addAddress('info@nalepoorga.com', 'NALEPO Team');
        $mail->addReplyTo($email, $firstName . ' ' . $lastName);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission: ' . $subject;
        
        $emailBody = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .header { background-color: #B91C1C; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #B91C1C; }
                .footer { background-color: #f8f9fa; padding: 15px; text-align: center; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class='header'>
                <h2>New Contact Form Submission</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span> {$firstName} {$lastName}
                </div>
                <div class='field'>
                    <span class='label'>Email:</span> {$email}
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span> {$phone}
                </div>
                <div class='field'>
                    <span class='label'>Subject:</span> {$subject}
                </div>
                <div class='field'>
                    <span class='label'>Newsletter Subscription:</span> {$newsletter}
                </div>
                <div class='field'>
                    <span class='label'>Message:</span><br>
                    <div style='background-color: #f8f9fa; padding: 15px; border-left: 4px solid #B91C1C; margin-top: 10px;'>
                        {$message}
                    </div>
                </div>
            </div>
            <div class='footer'>
                <p>This email was sent from the NALEPO website contact form.</p>
                <p>Submitted on: " . date('Y-m-d H:i:s') . "</p>
            </div>
        </body>
        </html>
        ";
        
        $mail->Body = $emailBody;
        
        $mail->send();
        
        // Redirect with success message
        header('Location: contact.php?status=success');
        exit;
        
    } catch (Exception $e) {
        // Redirect with error message
        header('Location: contact.php?status=error&msg=' . urlencode($mail->ErrorInfo));
        exit;
    }
} else {
    // Redirect if accessed directly
    header('Location: contact.php');
    exit;
}
?>