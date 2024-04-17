<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['message']);
    $date = strip_tags($_POST['date']);
    $location = strip_tags($_POST['location']);

    $to = 'theexoticfishdj@gmail.com'; 
    $subject = 'New Booking Request';
    $body = "You have received a new booking request:\n\nName/Organization: $name\nEmail: $email\nMessage: $message\nDate: $date\nLocation: $location";

    $headers = "From: webmaster@example.com\r\n"; 
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your booking request. We will be in touch soon!';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
}
?>