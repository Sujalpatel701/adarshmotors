<?php
include("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $brandName = $_POST["brandName"];
    $modelName = $_POST["modelName"];
    $partName=$_POST["partName"];
   
    $stmt = $conn->prepare("SELECT * FROM part WHERE model = ? AND brand = ? AND part_name=?");
    $stmt->bind_param("sss", $modelName, $brandName,$partName);
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
