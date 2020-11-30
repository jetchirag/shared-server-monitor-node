<?php
$to = $_GET['to'];
$subject = "Test Email";
$txt = "Hello world!";
$headers = "From: webmaster@vhostplatform.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>
