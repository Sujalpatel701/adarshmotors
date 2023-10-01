<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "adarshmotors";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["brandName"])) {
    $brandName = $_POST["brandName"];

    $sql = "SELECT brand_name FROM brand WHERE brand_name = $brandName";
    $stmt = $conn->query($sql);
    if ($stmt>0) {
        echo "exists"; // Brand exists
    } else {
        echo "not_exists"; // Brand does not exist
    }

    $stmt->close();
}

$conn->close();
?>
