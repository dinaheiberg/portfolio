<?php


if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "kontakt@dinaheiberg.dk";
    $headers = "From: ".$mailFrom;
    $txt = "du har modtaget en besked fra ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: kontakt.html?mailsend");
}