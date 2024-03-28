<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject=$_POST['subject'];
$message= $_POST['message'];
$to = "akshaykottappurath366@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $subject . "\r\n  Message =" . $message;
$headers = "From: noreply@rasanmetaltradingcompany.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>