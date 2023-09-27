<?php
include('../dbconnection.php');
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['phone'];


    $checkEmailSql = "SELECT * FROM `user` WHERE `user_email`='$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailSql);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        echo "EmailAlreadyExists";
    } else {

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $insertSql = "INSERT INTO `user`(`user_name`, `user_email`, `user_pass`, `user_phone`) VALUES ('$username','$email','$hashedPassword','$contact')";
        $result = mysqli_query($conn, $insertSql);
        if ($result) {
            echo "UserAddedSuccessfully";
        } else {
            echo "UserNotAdded";
        }
    }
}
mysqli_close($conn);
?>