<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adarshmotors";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $brandName = $_POST["brandName"];

    $sql = "SELECT brand_name FROM brand WHERE brand_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $brandName);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "exists";
    } else {
        echo "available";
    }

    $stmt->close();
    $conn->close();
}
?>
