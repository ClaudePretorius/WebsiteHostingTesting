<?php
//Variable settings
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//Check input fields validation
if (empty($name)||empty($email)||empty($message)) 
{
    echo('Please fill in all the information');
}
else
{
    mail("clde.pretorius@gmail.com","Testing Message 123", $message,"From: $name <$email>");
    echo "<script type='text/javascript'>
    alert('Message sent successfully');
    window.history.go(-1);
    </script>";
}

?>