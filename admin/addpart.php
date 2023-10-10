<?php
// Database connection details
include("dbconnect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$brand = $_POST['brand'];
$model = $_POST['model'];
$partName = $_POST['partName'];
$partDesc = $_POST['partDesc'];
$partPrice = $_POST['partPrice'];

// Handle file upload
$partImage = $_FILES['partImage']['name'];
$target_dir = "partimg/"; // Specify your upload directory
$target_file = $target_dir . basename($_FILES["partImage"]["name"]);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
} else {
    // Upload the file
    if (move_uploaded_file($_FILES["partImage"]["tmp_name"], $target_file)) {
        // Insert data into the database
        $sql = "INSERT INTO part (brand, model, part_name, part_desc, part_price, part_img)
                VALUES ('$brand', '$model', '$partName', '$partDesc', '$partPrice', '$partImage')";

        if ($conn->query($sql) === TRUE) {
            echo "Part Added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Close the database connection
$conn->close();
?>
