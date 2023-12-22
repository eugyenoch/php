<?php
//PHP mail() begins
$to = $em;
$subject = "Welcome";

$message = 'Dear '.$fn.',<br>';
$message .= $active;
$message .= "Regards,<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@email.com>' . "\r\n";
//$headers .= 'Cc: myboss@email.com' . "\r\n";

mail($to,$subject,$message,$headers);
//PHP mail() ends
?>
