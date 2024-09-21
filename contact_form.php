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
    $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'admin@hightable.ai'; // SMTP username
    $mail->Password   = 'pzkozlokzwufpwgb'; // SMTP password (use App Password if 2FA is enabled)
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port       = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('admin@hightable.ai', 'Admin');
    $mail->addAddress('admin@hightable.ai'); // Add a recipient

    // Collect form data and validate inputs
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Ensure all required fields are filled
    if ($name && $phone && $email && $message) {
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    = '<html><body>';
        $mail->Body   .= '<h2>Contact Form Submission</h2>';
        $mail->Body   .= '<p><strong>Name:</strong> ' . $name . '</p>';
        $mail->Body   .= '<p><strong>Phone:</strong> ' . $phone . '</p>';
        $mail->Body   .= '<p><strong>Email:</strong> ' . $email . '</p>';
        $mail->Body   .= '<p><strong>Message:</strong></p>';
        $mail->Body   .= '<p>' . $message . '</p>';
        $mail->Body   .= '</body></html>';

        $mail->send();
        echo 'success';
    } else {
        echo 'error: Please fill in all required fields.';
    }
} catch (Exception $e) {
    echo 'error: ' . $mail->ErrorInfo; // Return detailed error message
}
?>
