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

    $uploadDir = "modelimg/"; 
    $modelImage = basename($_FILES["modelImage"]["name"]);
    $modelImageFile = $uploadDir . basename($_FILES["modelImage"]["name"]);
    if (move_uploaded_file($_FILES["modelImage"]["tmp_name"], $modelImageFile)) {
        $sql = "INSERT INTO model (brand, model_name, model_img) VALUES ('$brandName', '$modelName', '$modelImage')";
        if ($conn->query($sql) === TRUE) {
            echo "Model added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }
    $conn->close();
}
?>
