<?php
include "PHPMailerAutoload.php";

$gmailUsername = "markmarkdenver@gmail.com";//Gmail username to be use as sender(make sure that the gmail settings was ON or enable)
$gmailPassword = "denvergwapo";//Gmail Password used for the gmail 


//////////////////////////////////////
$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; // 
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = $gmailUsername;
$mail->Password = $gmailPassword;
/////////////////////////////////////
//ADDITIONAL FOR FILE ATTACHMENT

$mail->SetFrom($gmailUsername,"TRY SOMETHING");//Name of Sender: the "FEU-IT Admin" could be change and replace as the name of the sender
$mail->Subject = "Pakito Airlines | Registration"; //Email Subject: to get the subject from the form
$mail->Body = "Thank you for considering us, Pakito Airlines. 
This is to notify that this e-mail was used to register for an account. 
Any feedback will not be entertained. Thank you. -Pakito Airlines Management";//Content of Message : to get the content or body of the email from form
$mail->AddAddress("babaranmark@yahoo.com");//Recepient of email: to send whatever email you want to
set_time_limit(240);


 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

 
 
?>
