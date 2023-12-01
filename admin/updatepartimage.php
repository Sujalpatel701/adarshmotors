<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the AJAX request
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $part = $_POST['part'];

    // Validate data if needed

    // File upload handling
    $targetDir = 'partimg/'; // Directory where you want to store the images
    $fileName = basename($_FILES['image']['name']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if the file is an image
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);

        include('dbconnect.php');
        $query = "UPDATE part SET part_img = ? WHERE brand = ? AND model = ? AND part_name = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param('ssss', $fileName, $brand, $model, $part);

        if ($statement->execute()) {
            echo 'Image updated successfully.';
        } else {
            echo 'Failed to update image. Please try again.';
        }

        // Close the database connection
        $statement->close();
        $conn->close();
    } else {
        echo 'Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.';
    }
} else {
    // If the request method is not POST
    http_response_code(405); // Method Not Allowed
    echo 'Invalid request method';
}
?>
