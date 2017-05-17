<?php

/* SETTINGS */
$yourEmail = "drinkhorchata@gmail.com";
if($_POST['newsletter'] === 'newsletter')
{
  $emailSubject = "Please subscribe me to your newsletter";
} else {
  $emailSubject = "Contact Form";
}


if($_POST){

  if($_POST['human'] == ''){
    /* DATA FROM HTML FORM */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $name <$email>\r\n" .
              "Reply-To: $name <$email>\r\n" . 
              "Subject: $emailSubject\r\n" .
              "Content-type: text/plain; charset=UTF-8\r\n" .
              "MIME-Version: 1.0\r\n" . 
              "X-Mailer: PHP/" . phpversion() . "\r\n";

    /* SEND EMAIL */
    mail($yourEmail, $emailSubject, $message, $headers);
  }
}
?>
