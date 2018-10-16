<?php

if($_POST["submit"]) {
    $my_email="soljin01@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    header('Location: index.html');
    mail($my_email, $subject, $mailBody, "From: $sender <$senderEmail>");

    // $thankYou="<p>Thank you! Your message has been sent.</p>";
    //done. redirect to thank-you page.
}

?>
