<?php

// getting the value of name field
$name = $_POST["firstname"];
// getting the value of the email field
$message = $_POST["subject"];

echo "Thanks, ". $name . "<br>";
echo "Your message has been successfully sent!";
echo "<br>";
echo "<br>";
echo "Your message is: ". $message ."<br>";

?>
