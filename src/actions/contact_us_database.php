<?php

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $mailFrom = $_POST["mail"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mailTo = $mailFrom;
    $headers = "From: ".$mailFrom;
    $txt = "Ai primit un mesaj de la ".$name."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}