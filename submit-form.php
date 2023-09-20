<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "cameron.r.davies2007@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $region = $_POST["region"];
    $message = $_POST["message"];

    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Phone Number: $phone\n";
    $message_body .= "Selected Region: $region\n";
    $message_body .= "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
