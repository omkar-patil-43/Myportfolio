<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "omkar832001@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    echo  '<script>alert("email sent successfully");window.location.href="index.html";</script> ';
}
else{
        echo  '<script>alert("email not sent !!!");window.location.href="index.html";</script> ';
}
//redirect


?>