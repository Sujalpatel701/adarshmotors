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
    $modelName = $_POST["modelName"];

    $stmt = $conn->prepare("SELECT * FROM model WHERE model_name = ? AND brand = ?");
    $stmt->bind_param("ss", $modelName, $brandName);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "exists";
    } else {
        echo "not_exists";
    }

    $stmt->close();
    $conn->close();
}
?>
