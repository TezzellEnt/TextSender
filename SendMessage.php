<html>
<!-- add style to form in wordpress -->
<body>

<form action="SendMessage.php" method="post">
To Number: <input type="text" name="ToNumber"><br>
Message: <input type="text" name="UserMessage"><br>
<input type="submit">
</form>

<?php
// Get variables from form input
$UserMessage = $_POST['UserMessage']; //"Jenny please?! I love you <3";
$FromNumber =  "+14158141829"; // Whatever number is given from Twilio
$ToNumber = $_POST['ToNumber']; // "+15558675309";
$MediaURL = ""; //url for image like heart in example ?

// Get the PHP helper library from twilio.com/docs/php/install
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

//-------------------------------------- How to make a call from AccountIDToke.php to grab code
// Your Account Sid and Auth Token from twilio.com/user/account - check gitingore code
require_once('/AccountIDToke.php'); // loads hidden Sid and Auth token variables
$sid = $_GET['sid'];
$token = $_GET['token'];
//-----------------------------------------------------------------

$client = new Services_Twilio($sid, $token);

$client->account->messages->sendMessage("$FromNumber", "$ToNumber", "$UserMessage", "$MediaURL");


echo "Your message -". $UserMessage . "- to phone number ". $ToNumber . "has been sent!";

?>

</body>
</html> 