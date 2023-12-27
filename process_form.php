<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    // Compose the email message
    $to = "duoduderrick15@gmail.com"; // Replace with your email address
    $subject = "New Quote Request";
    $message_body = "Name: $name\nEmail: $email\nMobile: $mobile\nService: $service\nMessage:\n$message";

    // Send the email
    mail($to, $subject, $message_body);

    // Redirect to a thank you page or display a success message
    header("Location: index.html"); // Create a thank you page
    exit();
}
?>
