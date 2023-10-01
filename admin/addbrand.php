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

    $uploadDir = "brandimg/";
    $logoFile = basename($_FILES["logoOfBrand"]["name"]);
    $logoFile1 = $uploadDir . basename($_FILES["logoOfBrand"]["name"]);
    if (move_uploaded_file($_FILES["logoOfBrand"]["tmp_name"], $logoFile1)) {
        $sql = "INSERT INTO brand (brand_name, brand_img) VALUES ('$brandName', '$logoFile')";
        if ($conn->query($sql) === TRUE) {
            echo "Brand added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }
    $conn->close();
}
?>

