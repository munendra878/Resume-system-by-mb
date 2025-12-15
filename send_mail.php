<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Format text
    $entry = "-----------------------------------\n";
    $entry .= "Name: $name\n";
    $entry .= "Email: $email\n";
    $entry .= "Message: $message\n";
    $entry .= "Date: " . date("d-m-Y h:i:s A") . "\n";

    // Save in messages.txt
    file_put_contents("messages.txt", $entry, FILE_APPEND);

    echo "Message received successfully!";
}
?>
