<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $part = $_POST['part'];
    $description = $_POST['description'];


    include("dbconnect.php");

    $query = "UPDATE part SET part_desc = ? WHERE brand = ? AND model = ? AND part_name = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param('ssss', $description, $brand, $model, $part);
    
    if ($statement->execute()) {
        echo 'Description updated successfully.';
    } else {
        echo 'Failed to update description. Please try again.';
    }

    $statement->close();
    $conn->close();
} else {
    http_response_code(405); 
    echo 'Invalid request method';
}
?>