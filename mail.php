<?php
require_once('PHPMailerAutoload.php')
$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure="ssl";
$mail->Host="smtp.gmail.com";
$mail->Port="465";
$mail->isHTML();
$mail->Username="ggggggege155@gmail.com";
$mail->Password="d6e5eccKRACHNEU";
$mail->SetFrom('pats');
$mail->Subject="Test";
$mail->Body="test";
$mail->AddAddress($_POST['email']);
$mail->Send();
?>
