<?php
$name = $_POST['name'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent = "Name: $name \n City: $city \n Phone: $phone \n Email  Id: $email  \n Message  : $message";
$recipient = "islanddivers7@gmail.com, islanddiversin@gmail.com";
$subject = "Enquiry Details From Island Divers";
$mailheader = "From: $email \r\n";

// Send email to recipient
if(mail($recipient, $subject, $formcontent, $mailheader)) {
    // Send thank you email to user
    $thank_you_subject = "Thank you for contacting Island Divers";
    $thank_you_message = "Dear $name,\n\nThank you for contacting Island Divers. We have received your enquiry and will get back to you soon.\n\nBest regards,\nIsland Divers Team";
    $thank_you_headers = "From: islanddivers7@gmail.com \r\n";
    
    mail($email, $thank_you_subject, $thank_you_message, $thank_you_headers);
    
    header("Location:thank-you.php");
} else {
    echo "Error sending email. Please try again.";
}
