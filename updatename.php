<?php
session_start();

if (isset($_SESSION['useremail'])) {
    $userEmail = $_SESSION['useremail'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = htmlspecialchars($_POST['userName']);
        include("dbconnection.php");        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $updateQuery = "UPDATE user SET user_name='$userName' WHERE user_email='$userEmail'";
        
        if ($conn->query($updateQuery) === TRUE) {
            echo "User name updated successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
}
?>
