<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Replace with your database connection details
    include("dbconnect.php");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the brand name sent from the AJAX request
    $brandName = $_POST["brandName"];

    // Prepare a SQL query to check if the brand name exists
    $sql = "SELECT brand_name FROM brand WHERE brand_name = ?";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $brandName);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Brand name already exists
        echo "exists";
    } else {
        // Brand name does not exist
        echo "not_exists";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
