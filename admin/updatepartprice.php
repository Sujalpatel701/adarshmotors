<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $part = $_POST['part'];
    $price = $_POST['price'];

    include("dbconnect.php");
    $query = "UPDATE part SET part_price = ? WHERE brand = ? AND model = ? AND part_name = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param('dsss', $price, $brand, $model, $part);
    
    if ($statement->execute()) {
        echo 'Price updated successfully.';
    } else {
        echo 'Failed to update price. Please try again.';
    }

    $statement->close();
    $conn->close();
} else {
    http_response_code(405); 
    echo 'Invalid request method';
}
?>