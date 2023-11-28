<?php
include("dbconnect.php");
if (isset($_POST['brandName'])) {
    $brandName = $_POST['brandName'];
    
    $sql = "SELECT brand_name FROM brand WHERE brand_name = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $brandName);
    $stmt->execute();
    $stmt->store_result();

    
    if ($stmt->num_rows > 0) {
        echo "Exists";
    } else {
        echo "Not Exists";
    }

}
?>
