<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "adarshmotors";


$conn = new mysqli($host, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $brandName = $_POST["brandName"];
    $modelName = $_POST["modelName"];

 

   
    $stmt = $conn->prepare("SELECT * FROM model WHERE model_name = ? AND brand = ?");
    $stmt->bind_param("ss", $modelName, $brandName);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        
        echo "exists";
    } else {
        
        echo "available";
    }

    $stmt->close();
}
?>
