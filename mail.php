<?php
if(isset($_POST['submit']))
{
    $fullname= $_POST['fullname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
	$subject= $_POST['subject'];
	$message= $_POST['message'];
    
    $body =
    "Fullname : $fullname
    Email Id :  $email
    Phone No.:  $phone
	Subject : $subject
    Message  :  $message";
         
    $result = mail("sanjayranatanabana@gmail.com", $subject, $body);
    if($result > 0)
    {
        echo "<script>alert('Mail sent successfully')</script>";
    }
}
?>