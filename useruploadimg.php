<?php
session_start();

if (isset($_SESSION['useremail'])) {
    $userEmail = $_SESSION['useremail'];

    if (isset($_FILES['imageUpload'])) {
        $uploadDirectory = 'user/userimg/';
        $uploadedFile = $uploadDirectory . basename($_FILES['imageUpload']['name']);
        
        if (move_uploaded_file($_FILES['imageUpload']['tmp_name'], $uploadedFile)) {
            
            $imagePath=$_FILES['imageUpload']['name'];
            include('dbconnection.php');
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $updateQuery = "UPDATE user SET user_img='$imagePath' WHERE user_email='$userEmail'";
            
            if ($conn->query($updateQuery) === TRUE) {
                echo "Image added successfully!";
            } else {
                echo "Error updating record: " . $conn->error;
            }

            $conn->close();
        } else {
            echo "Error uploading file.";
        }
    }
}
?>
