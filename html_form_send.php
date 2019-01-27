<?php

if($_POST["submit"]) {
    $recipient="sthapatya19@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderMobile=$_POST["mobile"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nName: $senderMobile\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>
