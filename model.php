<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/audi/style.css">
    <title>MODELS</title>
</head>
<body style="background-color: #0e1f0b;">

<nav class="navbar navbar-dark bg-dark" style="font-size: 40px;">
    <div style="display: flex; align-items: center; justify-content: flex-end;">
    <?php
    if (isset($_GET['brandName'])) {
        $brandName = $_GET['brandName'];
        include('dbconnection.php');
        $sql = "SELECT brand_img FROM brand WHERE brand_name = '$brandName'";
        echo "<img src='admin/brandimg/" . $brandName . ".png' style='height: 75px;background-color:white;border-radius: 25px;' alt='' loading='lazy'>";
    }
    ?>
        <div style="display: flex; align-items: center; margin-left: 10px;">
            <div style="width: 2px; background-color: white; height: 75px; margin-right: 10px;"></div>
            ADARSH MOTORS
        </div>
    </div>
    <div>
    <a href="#"  class="home" style="font-family: 'Times New Roman', Times, serif;color: white; text-decoration: none;margin: 10px;;padding:0">Home</a>
    <a href="#" class="user" style="color: white; text-decoration: none; margin:0;padding:0;font-family: 'Times New Roman', Times, serif;" >User</a>
    </div>
</nav>




<div style="margin-left: 2%; background-color: #0e1f0b;
margin-right:2%; " id="brandsaudi">
<div class="tutorial1" id="tutorial" style="background-color: #0e1f0b;
    text-align: center;
    color: white;
    font-family: 'Ubuntu', sans-serif;
    font-size: 1.5em;
    font-weight: bold;
    padding: 10px;
    margin-right: -1%;
    margin-left:-1%">
<div class="tutorial" id="brands">
          <center>MODELS</center> </div>
</div>
<div class="row carsshow row-cols-1 row-cols-md-4">
  <?php
   if (isset($_GET['brandName'])) {
    $brandName = $_GET['brandName'];
    include('dbconnection.php');
    $sql = "SELECT model_name,model_img FROM model WHERE brand = '$brandName'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
        echo '<div class="col mb-4" id="audi">
        <div class="card">
          <img id="modelimg" src="admin/modelimg/' . $row['model_img'] . '" class="card-img-top custom-image" style="width: 350px; height: 250px; object-fit:contain; " alt="...">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold; font-size: 40px; text-transform: uppercase;">' . $row['model_name'] . '</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Choose Model To View Parts</p>  
          <a class="btn btn-danger text-white font-width-bolder float-right" href="audi.php">view Models</a>
          </div>
        </div>
      </div>';
      }
    }
    else{
      echo '<h1 style="color: white;">No Model Found</h1>';
    }
}
?>
</div>
</div> 


<div class="hrs" style="background-color: gray;
width:100%;
margin:0;
padding:0;">
<hr class="hrs1" style="width: 100%;
    border: solid 3px grey;
    margin:0;
    padding:0;
    margin-left:-1%;">
</div>

<div class="container-fluid txt-banner" style="background-color: #0e1f0b;color: white;">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fa-solid fa-user mr-3"></i>Mahesh Patel</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fa-solid fa-phone mr-3"></i>9898614360</h5>
  </div>
  <div class="col-sm">
    <h5><i class="fa-solid fa-user mr-3"></i>Bharat Patel</h5>
  </div>
  <div class="col-sm">
    <h5><i class="fa-solid fa-phone mr-3"></i>9824729040</h5>
  </div>
</div>
</div>
<div class="hrs" style="background-color: gray;
width:100%;
margin:0;
padding:0;">
<hr class="hrs1" style="width: 100%;
    border: solid 3px grey;
    margin:0;
    padding:0;
    margin-left:-1%;">
</div>
<footer class="bg-dark text-center text-white">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  ADARSH MOTORS Since 2008
  </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>