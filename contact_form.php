<?php
// Include PHPMailer files
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

// Use PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP(); // Use SMTP
    $mail->Host       = 'smtp.example.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'your_email@example.com'; // SMTP username
    $mail->Password   = 'your_password'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('your_email@example.com', 'Your Name');
    $mail->addAddress('admin@hightable.ai'); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Contact Form Submission';
    $mail->Body    = '<html><body>';
    $mail->Body   .= '<h2>Contact Form Submission</h2>';
    $mail->Body   .= '<p><strong>Name:</strong> ' . htmlspecialchars($_POST['name']) . '</p>';
    $mail->Body   .= '<p><strong>Phone:</strong> ' . htmlspecialchars($_POST['phone']) . '</p>';
    $mail->Body   .= '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
    $mail->Body   .= '<p><strong>Message:</strong></p>';
    $mail->Body   .= '<p>' . htmlspecialchars($_POST['message']) . '</p>';
    $mail->Body   .= '</body></html>';

    $mail->send();
    echo 'success';
} catch (Exception $e) {
    echo 'error: ' . $mail->ErrorInfo; // Return detailed error message
}
?>
