<?php
require "connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["user"];
    $newPassword = $_POST["password"];

    $updateQuery = "UPDATE useraccount SET password = '$newPassword' WHERE username = '$enteredUsername'";
    if ($conn->query($updateQuery) === TRUE) {
        echo "Password changed successfully!";
        header ('Location: ../../loginpage.php');
    } else {
        echo "Error updating password: " . $conn->error;
    }
} else {
    echo "Invalid username or old password.";
}



$conn->close();

?>