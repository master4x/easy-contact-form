<?php

$errorMSG = "";

// FIRST NAME
if (empty($_POST["firstname"])) {
    $errorMSG = "Name is required ";
} else {
    $firstname = $_POST["firstname"];
}

// LAST NAME
if (empty($_POST["lastname"])) {
    $errorMSG = "Name is required ";
} else {
    $lastname = $_POST["lastname"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// SUBJECT
if (empty($_POST["subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $subject = $_POST["subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

// RECIVER
$EmailTo = "mail@example.com";
$SubjectTo = "New Message";

// BODY
$Body = "";
$Body .= "First Name: ";
$Body .= $firstname;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $lastname;
$Body .= "\n";
$Body .= "E-Mail: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// SEND
$success = mail($EmailTo, $SubjectTo, $Body, "From:".$email);

// REDICT
header("Location: /");

?>
