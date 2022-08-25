<?php
$name =$_POST['name'];
$email =$_POST['email'];
$number=$_POST['number'];
$company =$_POST['company'];
$message =$_POST['message'];

$to ="anuj@tradeimex.in";
$subject="Mail from Tradeimex";
$txt="Name =". $name . "\r\n Email= ". $email ."\r\n
Message=" . $message . "\r\n CompanyName=" . $company . "\r\n MobileNUmber=" . $number;
$header="From: noreply@yoursite.com". "\r\n" .
"CC:somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:Thankyou.html");

?>