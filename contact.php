<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'yashkalyani456@gmail.com';

$subject = "New Form Submission";

$mailheader = "From: $email \r\n";

$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                    "User Message: $message.\n";

$recipient = "yk7335@tamu.edu";

$headers = "Form: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";


mail($recipient, $subject, $email_body, $headers) or die("Error!");
header("Location: index.html");
echo "Thank You!";
?>