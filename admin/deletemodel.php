<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include("dbconnect.php"); // Include your database connection script.

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $brandName = $_POST["brandToDelete"];
    $modelName = $_POST["modelToDelete"];

    // Use prepared statements to prevent SQL injection.
    $checkQuery = "SELECT model_name, model_img FROM model WHERE brand = ? AND model_name = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ss", $brandName, $modelName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $modelImage = $row["model_img"];

        // Delete the model image from the folder.
        $imagePath = "modelimg/" . $modelImage;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

         // Delete the brand record from the database.
         $deleteQuery = "DELETE FROM model WHERE brand = '$brandName' AND model_name = '$modelName'";
         if ($conn->query($deleteQuery) === TRUE) {
             echo "Brand'$brandName' Model '$modelName' deleted successfully.";
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
