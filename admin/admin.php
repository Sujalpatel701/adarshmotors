<?php
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['is_login'])) {
if(isset($_POST['loginemail']) && isset($_POST['loginpassword'])) {
    $loginemail = $_POST['loginemail'];
    $loginpassword = $_POST['loginpassword'];

    $loginemail = trim($loginemail);
    $loginpassword = trim($loginpassword);
    
    require_once('../dbconnection.php');

    $sql = "SELECT * FROM `admin` WHERE `admin_email` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $loginemail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($loginpassword, $row['admin_pass'])) {
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