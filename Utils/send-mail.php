<?php
function joinUs(){
    
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $subject='I am interested to work with your organization.';
    $message=$_POST['Message'];

    $to = "team@samajsevabharatipb.org";
    $headers = "From: ".$email;
    mail($to, $subject, $message, $headers);
    // header("location:mail.php");
}


function contactUs(){
    
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $subject=$_POST['Subject'];
    $message=$_POST['Message'];

    $to = "team@samajsevabharatipb.org";
    $headers = "From: ".$email;
    mail($to, $subject, $message, $headers);
    // header("location:mail.php");
}



if(isset($_POST['Subject']))
    contactUs();
else
    joinUs();






    
?>