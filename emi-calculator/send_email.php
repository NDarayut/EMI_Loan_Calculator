<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_submit'])) {
    $name     = htmlspecialchars(trim($_POST['name']));
    $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone    = htmlspecialchars(trim($_POST['phone']));
    $subject  = htmlspecialchars($_POST['subject']);
    $message  = htmlspecialchars(trim($_POST['message']));
    $consent  = isset($_POST['privacy_consent']) ? 'Yes' : 'No';

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'darayutnhem009@gmail.com'; // ✅ Your Gmail
        $mail->Password   = 'aotw uozh aahy ehcm';   // ✅ App password, not your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email setup
        $mail->setFrom($email, $name);
        $mail->addAddress('darayutnhem009@gmail.com'); // ✅ Where you receive the contact messages
        $mail->addReplyTo($email, $name);

        $mail->Subject = "Contact Form: $subject";
        $mail->Body = "You have received a new message from your website contact form:\n\n"
                    . "Name: $name\n"
                    . "Email: $email\n"
                    . "Phone: $phone\n"
                    . "Subject: $subject\n"
                    . "Message:\n$message\n\n"
                    . "Consent Given: $consent";

        $mail->send();

        echo "<script>
                alert('Your message has been sent successfully!');
                window.location.href = 'contact.php';
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Mailer Error: {$mail->ErrorInfo}');
                window.location.href = 'contact.php';
              </script>";
    }
} else {
    header("Location: contact.php");
    exit;
}
?>
