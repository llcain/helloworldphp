<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>
<body>
    <h1>contact form </h1>
    <p>Contact form has been submitted</p>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $to = "llcain2012@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($to, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}