<?php
// Get values from form
$companyname=$_POST['companyname'];
$contactname=$_POST['contactname'];
$phonenumber=$_POST['phonenumber'];
$emailaddress=$_POST['emailaddress'];
 
$to = "info@navitascredit.com";
$subject = "Partner Funding Contact Request";
$message = " Company Name: " . $companyname . "\r\n Contact Name: " . $contactname . "\r\n Phone Number: " . $phonenumber . "\r\n Email Address: " . $emailaddress;
 
 
$from = "Partner Funding";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='#openModal';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}
?>