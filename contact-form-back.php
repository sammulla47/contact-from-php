<meta http-equiv="refresh" content="8; url=http://www.example.com"> // add your domian here
<meta name="robots" content="noindex">
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.6.5/src/Exception.php';
require 'PHPMailer-6.6.5/src/PHPMailer.php';
require 'PHPMailer-6.6.5/src/SMTP.php';

//if(isset($_POST['submit'])) {
$subject = "New Enquiry Coming From Your Website www.Example.com";
$Email=$_POST['email'];
$Rname=$_POST['name'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$body=$_POST['body'];
$sendName="Website Name";
$message="";

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0; // Have you tried turning off debugging? if on debugging use 1 or 2
$mail->Host = 'smtp.mail.yahoo.com';
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
// $mail->SMTPSecure = 'tls';
// $mail->Port = 587;
$mail->Username = 'noreply@yahoo.com';
$mail->Password = 'wzwrnofedfdfahwbxibrdo';
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->setFrom('noreply@yahoo.com', $sendName);
$mail->addAddress('weretosend@gmail.com', 'companyname');
// $mail->CharSet = 'UTF-8';
// $mail->Encoding = 'base64';
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $body . "<br>Client Name: " . $Rname . "<br>Phone number: " . $phone . "<br/> Client Email: " . $Email;
// $mail->addAttachment('attachment.txt');
if (!$mail->send() && !$message){
echo $message = '<p style="font-size: 20px; text-align: center;">Sorry! Message was not sent, Some Things Went To Worng. <b>Please call us directly on 9999 9999</b></p>';
  die(); 
} else {
echo $message = '<p style="font-size: 20px; text-align: center;">Thank you for submitting your enquiry. We will contact you soon via call or whatsApp message.</p>';
  die();
}
//}
?>