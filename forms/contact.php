<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create email body
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Subject: " . $subject . "\n";
    $body .= "Message: " . $message . "\n";

    // Set recipient email address
    $recipient = "contact@wellx.in";

    // Set email headers
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Attempt to send the email
    if (mail($recipient, $subject, $body, $headers)) {
        // If successful, display success message
        echo '<div class="sent-message">Your message has been sent. Thank you!</div>';
    } else {
        // If unsuccessful, display error message
        echo '<div class="error-message">Sorry, there was an error sending your message. Please try again later.</div>';
    }
}
?>
