<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject=$_POST['subject'];
$message= $_POST['message'];
$to = "palsushant222@gmail.com";
$subject = "Mail From portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject "\r\n Message = " . $message;
$headers = "From: noreply@portfolio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>