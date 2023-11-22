<?php
session_start();

if (isset($_SESSION['useremail'])) {
    $userEmail = $_SESSION['useremail'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $address = htmlspecialchars($_POST['address']);

        include("dbconnection.php");
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $updateQuery = "UPDATE user SET user_add='$address' WHERE user_email='$userEmail'";
        
        if ($conn->query($updateQuery) === TRUE) {
            echo "Address added successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
}
?>
