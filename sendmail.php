<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Sanitize input data
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format");
        }

        // Send email
        $to = "reservations@holidayinn.co.tz"; // Your email address
        $subject = "RESERVATION MESSAGE";
        $body = "Username: $username\nEmail: $email\nPhone: $phone\nMessage: $message";

        if (mail($to, $subject, $body)) {
            echo "Email sent successfully!";
        } else {
            throw new Exception("Failed to send email");
        }
    } catch (Exception $e) {
        // Log error
        error_log("Error: " . $e->getMessage(), 0);
        // Redirect or display error message
        header(""); // Redirect to error page
        exit;
    }
} else {
    // If not a POST request, redirect to the form page
    header("Location: contact.php");
    exit;
}
?>
