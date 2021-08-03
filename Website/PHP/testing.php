<?php

$to='clde.pretorius@Gmail.com';

$subject='This is the test email';

$message='Hi there, </h1><p>Thanks for testing Claude!<p>';

$headers = "From: Claude <Sender@gmail.com>\r\n";
$headers .= "Reply-To:clde.pretorius@Gmail.com\r\n";
$headers .="Content-type: text/html\r\n";

mail($to,$subject,$message,$headers);
?>