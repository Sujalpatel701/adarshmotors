<?php
session_start();
if (isset($_SESSION['useremail'])) {
    $userEmail = $_SESSION['useremail'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $occupation = htmlspecialchars($_POST['occupation']);
        include("dbconnection.php");      
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $updateQuery = "UPDATE user SET user_ocu='$occupation' WHERE user_email='$userEmail'";
        if ($conn->query($updateQuery) === TRUE) {
            echo "Occupation added successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
}
?>
