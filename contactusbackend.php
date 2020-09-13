<?php

include "conn.php";

if (Isset($_POST['submit'])){

$ConFname = $_POST['first_name'];
$Conemail = $_POST['email'];
$Conphone = $_POST['phone_number'];
$ConMes = $_POST['messageLa'];

}else{
  echo ('<script>alert("Got Error Liao Leh , Damn GG Wor")</script>');
}

$message = "Hi , I am  $ConFname , $ConMes , Contact Me At $Conphone ";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file.
require 'C:\xampp\composer\vendor\autoload.php'; */

/* If you installed PHPMailer without Composer do this instead: */
require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);
/*$mailid = $email;
$subject = "Test";
$text_message = "Hello";
$message = "Thank You for Contact with us.";
*/
?>


<?php
try {

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'joinjota@scout.my';   // SMTP username
$mail->Password = 'JotaJoti@1958';           // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                          // TCP port to connect to

   $mail->setFrom(  'qinpengchua@gmail.com' );

   $mail->addAddress('jota@scout.my', 'Receipient');

   $mail->Subject = 'Contact Us Support Email';

   $mail->Body = $message;

   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}
?>
