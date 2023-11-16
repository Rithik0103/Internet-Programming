<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST["role"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform some basic validation if needed

    // Display success message for login
    echo "Successfully logged in as $role with username $username!";
}
?>
