<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include("dbconnect.php"); 

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $brandName = $_POST["brandName"];
    $modelName = $_POST["modelName"];
    $partName = $_POST["partName"];

    $checkQuery = "SELECT brand, model,part_name, part_img FROM part WHERE brand = ? AND model = ? AND part_name = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("sss", $brandName, $modelName,$partName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $modelImage = $row["part_img"];

        $imagePath = "partimg/" . $modelImage;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

         $deleteQuery = "DELETE FROM part WHERE brand = '$brandName' AND model = '$modelName' AND part_name = '$partName'";
         if ($conn->query($deleteQuery) === TRUE) {
             echo "Brand'$brandName' Model '$modelName' part '$partName' deleted successfully.";
         } else {
             echo "Error deleting brand: " . $conn->error;
         }
    } else {
        echo "Model '$modelName' from brand '$brandName' does not exist.";
    }

    $stmt->close();
    $conn->close();
}
?>
