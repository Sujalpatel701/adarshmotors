<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include("dbconnect.php");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $brandName = $_POST["brandName"];
    $modelName = $_POST["modelName"];
    $partName = $_POST["partName"];
    $partPrice = $_POST["partPrice"];

    // Handle file upload if needed
    $uploadDir = "partimg/";
    $partImage = basename($_FILES["partImage"]["name"]);
    $partImageFile = $uploadDir . $partImage;

    if (move_uploaded_file($_FILES["partImage"]["tmp_name"], $partImageFile)) {
        // Insert the part into the database
        $sql = "INSERT INTO part (brand, model, part_name, part_price, part_img) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $brandName, $modelName, $partName, $partPrice, $partImage);
        if ($stmt->execute()) {
            echo "Part added successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error uploading part image.";
    }

    $conn->close();
}
?>
