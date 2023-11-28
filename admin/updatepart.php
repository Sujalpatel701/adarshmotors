<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include("dbconnect.php");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $brandName = $_POST["updatebrand"];
    $modelName = $_POST["updatemodel"];
    $partName = $_POST["updatepart"];
    $partPrice = $_POST["updateprice"];
    $partDesc = $_POST["updatedesc"];

    if (!empty($brandName) && !empty($modelName) && !empty($partName)) {

        $sql = "UPDATE part_table SET part_price = ?, part_desc = ?, part_image = ? WHERE brand_name = ? AND model_name = ? AND part_name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("dsssss", $partPrice, $partDesc, $partImage, $brandName, $modelName, $partName);


        if 
        ($stmt->execute()) {
            echo "Part updated successfully!";
        } else {
            echo "Error updating part: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Brand name, model name, and part name are required.";
    }

    $conn->close();
}
?>
