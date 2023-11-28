<?php
session_start();

if (isset($_SESSION['useremail'])) {
    $userEmail = $_SESSION['useremail'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
        
        include("dbconnection.php");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $updateQuery = "UPDATE user SET user_phone='$phoneNumber' WHERE user_email='$userEmail'";
        
        if ($conn->query($updateQuery) === TRUE) {
            echo "Phone number updated successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
}
?>
