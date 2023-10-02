<?php
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['is_login'])) {
    if (isset($_POST['loginemail']) && isset($_POST['loginpassword'])) {
        $loginemail = $_POST['loginemail'];
        $loginpassword = $_POST['loginpassword'];
    
        $loginemail = trim($loginemail);
        $loginpassword = trim($loginpassword);
    
        require_once('../dbconnection.php');
    
        $sql = "SELECT * FROM `user` WHERE `user_email` = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 's', $loginemail);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($loginpassword, $row['user_pass'])) {
                $_SESSION['useremail'] = $loginemail;
                $_SESSION['username'] = $row['user_name'];
                $_SESSION['is_login'] = true;
                echo "LoginSuccessful";
            } else {
                echo "IncorrectPassword";
            }
        } else {
            echo "UserNotFound";
        }
        mysqli_close($conn);
    }
}
?>