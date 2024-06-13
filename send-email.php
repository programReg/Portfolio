<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email address where you want to receive the messages
    $to = '1reggiejoseph@gmail.com';
    
    // Subject of the email
    $subject = 'New Contact Form Submission';
    
    // Compose the email message
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    
    // Set headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo '<script>alert("Message sent successfully.");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    } else {
        echo '<script>alert("Failed to send message. Please try again later.");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    }
} else {
    // Redirect back to the form page if accessed directly
    header("Location: index.html");
}
?>
