<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    include("dbconnect.php"); 

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $brandName = $_POST["brandToDelete"]; 

    $checkQuery = "SELECT brand_name FROM brand WHERE brand_name = '$brandName'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        $deleteQuery = "DELETE FROM brand WHERE brand_name = '$brandName'";
        if ($conn->query($deleteQuery) === TRUE) {
            echo "Brand '$brandName' deleted successfully.";
        } else {
            echo "Error deleting brand: " . $conn->error;
        }
    } else {
        echo "Brand '$brandName' does not exist.";
    }

    $conn->close();
}
?>
