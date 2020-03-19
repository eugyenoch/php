<?php
$to=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['comment'];
//$mail_send=mail($to,$subject,$msg,$headers);

//Including headers - one method
$headers='from: David info@loggerbros.com' ."\n\r"
'Cc:Sales Department admin@loggerbros.com' . "\n\r"
.'Bcc:Accounting Department hello@logerbros.com' . "\n\r"
.'Content-type:text/html';

//Including headers - another method
/*
$headers='from: David info@loggerbros.com';
$headers.='Cc:sales Department admin@loggerbros.com';
$headers.='Bcc: Accounting Department hello@loggerbros.com';
$headers.='Content-type:text/html';
*/

if(isset($_POST['submit'])){
mail($to,$subject,$msg,$headers);
header('location:contact-us-thank-you.php');
}
else{
	header('location:contact-us.php');
	exit(0);
}
?>
