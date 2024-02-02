<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "jasper@fishermen.co"; // Replace with your email address
    $subject = "New Contact Form Submission";

    // Extract and sanitize form data
    $name = sanitize_text_field($_POST['fullname'] ?? '');
    $email = sanitize_text_field($_POST['email'] ?? '');
    $mobile = sanitize_text_field($_POST['mobile'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $message = sanitize_text_field($_POST['message'] ?? '');

    // Validate email
    if (!is_email($email)) {
        echo "Invalid email address.";
        exit;
    }

    // Compose the email content
    $content = "Name: $name\nEmail: $email\nMobile: $mobile\nSubject: $subject\nMessage: $message";

    // Use WordPress's wp_mail function to send the email
    if (wp_mail($to, $subject, $content)) {
        echo "Email sent successfully";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}