<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

    function emailAuth($mailToUser)
    {
        $mailToUser = new PHPMailer(true);
        $mailToUser->isSMTP();
        $mailToUser->Host = 'mail.roshan1997.com.np'; // Your SMTP server address
        $mailToUser->SMTPAuth = true;
        $mailToUser->Username = 'connect@roshan1997.com.np'; // Your SMTP username
        $mailToUser->Password = 'vGB2YU%}K0f?'; // Your SMTP password
        $mailToUser->SMTPSecure = 'tls'; // Enable TLS encryption
        $mailToUser->Port = 587; // TCP port to connect to

        return $mailToUser;
        
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    try {
       
        $mailToUser = emailAuth($mailToUser);
        $mailToUser->setFrom('connect@roshan1997.com.np', 'Roshan Shrestha');
        $mailToUser->addAddress($email); // Recipient email address
        $mailToUser->isHTML(true);
        $mailToUser->Subject = 'Confirmation: Your Message Has Been Received';
        $mailToUser->Body = 'Dear ' . $fname . ',<br><br>' .
                      'Thank you for contacting us. We have received your message and will get back to you as soon as possible.<br><br>' .
                      'Best regards,<br>Roshan Shrestha, <br>'.$url;
        $mailToUser->AltBody = 'Dear ' . $fname . ',\n\n' .
                         'Thank you for contacting us. We have received your message and will get back to you as soon as possible.\n\n' .
                         'Best regards,\n Roshan Shrestha';
        $mailToUser->send();

         // Now send email to admin
         $mailToAdmin = emailAuth($mailToAdmin);
         $mailToAdmin->setFrom('connect@roshan1997.com.np', 'Roshan1997 - Portfolio');
         $mailToAdmin->isHTML(true);
         $mailToAdmin->addAddress('shrestha.roshan1997@gmail.com');
         $mailToAdmin->Subject = 'Message Received From '.$fname . ' ' . $lname;
         $mailToAdmin->Body = 'Dear Roshan ,'.'<br><br>' .
         'You have received a message from '.$email.'.<br>'.'Message: ' .
         $message.'<br><br>'.'Best regards,<br>'.$fname . ' ' . $lname.', <br>'.$url;
         $mailToAdmin->send();
        // echo 'Thank you for your message!';
        header('Location: index.php');

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $e->getMessage();
    }
}

?>
