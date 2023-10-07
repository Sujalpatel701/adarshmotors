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
    $partName = $_POST["partName"];

    $stmt = $conn->prepare("SELECT * FROM part WHERE part_name = ? AND brand = ? AND model = ?");
    $stmt->bind_param("sss", $partName, $brandName, $modelName);
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
