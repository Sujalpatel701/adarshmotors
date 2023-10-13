<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include("dbconnect.php"); // Include your database connection script.

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $brandName = $_POST["brandToDelete"];

    // Check if the brand exists before attempting to delete it.
    $checkQuery = "SELECT brand_name, brand_img FROM brand WHERE brand_name = '$brandName'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $brandImage = $row["brand_img"];
        
        // Delete the brand image from the folder.
        $imagePath = "brandimg/" . $brandImage;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the brand record from the database.
        $deleteQuery = "DELETE FROM brand WHERE brand_name = '$brandName'";
        if ($conn->query($deleteQuery) === TRUE) {
            echo "Brand '$brandName' and its image deleted successfully.";
        } else {
            echo "Error deleting brand: " . $conn->error;
        }
    } else {
        echo "Brand '$brandName' does not exist.";
    }

    $conn->close();
}
?>
