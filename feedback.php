<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("dbconnection.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);


    $sql = "INSERT INTO feedback (feed_name, feed_sub, feed_mail,feed_back) VALUES ('$name', '$subject', '$email', '$message')";

    if ($conn->query($sql) === true) {
        echo "successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
