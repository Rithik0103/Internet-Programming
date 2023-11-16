<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST["role"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform some basic validation if needed

    // Display success message for registration
    echo "Successfully registered as $role with username $username!";
}
?>
