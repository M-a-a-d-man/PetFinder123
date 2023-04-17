<?php
// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the username and password format
if (!preg_match('/^[a-zA-Z0-9]+$/', $username) || !preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/', $password)) {
    echo "Error: Invalid username or password format. Please try again.";
    exit;
}

// Check if the username already exists
$loginFile = fopen("logins.txt", "r");
while (!feof($loginFile)) {
    $line = fgets($loginFile);
    if (strpos($line, $username . ':') === 0) {
        echo "Error: Username already exists. Please choose a different username.";
        fclose($loginFile);
        exit;
    }
}
fclose($loginFile);

// Write the new username and password to the login file
$loginFile = fopen("files/logins.txt", "a");
fwrite($loginFile, $username . ':' . $password . PHP_EOL);
fclose($loginFile);

echo "Account successfully created. You can now login whenever you are ready.";
?>
