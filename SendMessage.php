<?php
// Get variables from form input
$UserMessage = "Jenny please?! I love you <3";
$FromNumber = "+14158141829";
$ToNumber = "+15558675309";

// Get the PHP helper library from twilio.com/docs/php/install
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC5ef8732a3c49700934481addd5ce1659"; //example
$token = "{{ auth_token }}"; //example
$client = new Services_Twilio($sid, $token);

$client->account->messages->sendMessage("$FromNumber", "$ToNumber", "$UserMessage", "http://www.example.com/hearts.png");
?>