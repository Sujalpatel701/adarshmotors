<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
    <title>ADARSH MOTORS</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">ADARSH</a>
  <span class="navbar-text">MOTORS</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse pl-5" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto custom-nav">
    <li class="nav-item custom-nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item dropdown custom-nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BRANDS
        </a>
        <div class="dropdown-menu custom-nav-item-car bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item custom-nav-item text-white" href="#audi">AUDI</a>
          <a class="dropdown-item custom-nav-item text-white" href="#skoda">SKODA</a>
          <a class="dropdown-item custom-nav-item text-white" href="#vw">VW</a>
          <a class="dropdown-item custom-nav-item text-white" href="#hyundi">HYUNDI</a>
          <a class="dropdown-item custom-nav-item text-white" href="#suzuki">SUZUKI</a>
          <a class="dropdown-item custom-nav-item text-white" href="#tata">TATA</a>
          <a class="dropdown-item custom-nav-item text-white" href="#mahindra">MAHINDRA</a>
          <a class="dropdown-item custom-nav-item text-white" href="#bmw">BMW</a>
          <a class="dropdown-item custom-nav-item text-white" href="#mercedes">MERCEDES</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link " href="#contact">FeedBack</a>
      </li>
    
      <li class="nav-item custom-nav-item">
        <a class="nav-link " href="#contact">CONTACT US</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#aboutus">ABOUT US</a>
      </li>

    </ul>
    <ul class="navbar-nav mr-left">
      <?php
      session_start();
      if(isset($_SESSION['is_login'])){
        echo '<li class="nav-item custom-nav-item">
        <a class="nav-link " href="logout.php">LOGOUT</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link " href="user.php">MY PROFILE</a>';
      }
      
        else{
          echo '<li class="nav-item custom-nav-item">
          <a class="nav-link " href="#"  data-toggle="modal" data-target="#exampleModallogin" id="#loginaca">LOGIN</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link " href="#" data-toggle="modal" data-target="#exampleModalsignup">SIGN UP</a>
        </li>';
        }
    ?>
    </ul>
  </div>
</nav>



<div class="container-video remove-vid-marg">
  <div class="vid-parent">
    <video playinline autoplay muted loop>
      <source src="video/carvideo.mp4" type="video/mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
    <h1 class="my-content">Welcome To <span class="spam-name">ADARSH</span>  Motors</h1>
    <p class="my-content">AUTOPARTS </p>
    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalbuy">Browse Now</a>
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




<div style="margin-left: 2%; 
margin-right:2%;" id="brandsaudi">
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
          <center>BRANDS</center> </div>
</div>
<div class="row carsshow row-cols-1 row-cols-md-3">
<?php

if(isset($_SESSION['is_login'])){
  include('dbconnection.php');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  brand_name, brand_img FROM brand";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $brandName = $row["brand_name"];
      $imageSrc = $row["brand_img"];
      
      echo '<div class="col mb-4 brand-card">';
      echo '<div class="card">';
      echo '<img src="admin/brandimg/' . $imageSrc . '" class="card-img-top custom-image" style="width: 450px; height: 350px; object-fit: contain;" alt="...">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title" style="font-weight: bold; font-size: 40px; text-transform: uppercase;">' . $brandName . '</h5>'; 
      echo '<p class="card-text"></p>';
      echo '</div>'; 
      echo '<div class="card-footer">';
      echo '<p class="card-text d-inline">Choose Model To View Parts</p>';
      echo '<a class="btn btn-danger text-white font-width-bolder float-right view-model-link" href="model.php?brandName=' . $brandName . '">View Models</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
  }
} else{
  echo '<h1 style="color: white;">No Brand Found</h1>';
}
$conn->close();
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


<div id="contact" >
<div class="container mt-4" id="contact1">
  <h2 class="text-center mb-4">FeedBack & Contact Us</h2>
  <div class="row">
    <div class="col-md-8" id="form1">
      <form id="feebackform">
        <input type="text" class="form-control" id="feedbackname" name="name" placeholder="Name" style="background-color: #0e1f0b;"><br>
        <input type="text" class="form-control" id="feedbacksub" name="subject" placeholder="Subject" style="background-color: #0e1f0b;"><br>
        <input type="email" class="form-control" id="feedbackmail" name="email" placeholder="E-mail" style="background-color: #0e1f0b;"><br>
        <textarea class="form-control" name="message" id="feedbackfeed" placeholder="Your Feedback" style="height:150px;background-color: #0e1f0b;"></textarea><br>
        <div class="text-center">
          <span id="feedbackspan"></span>
         <input class="btn btn-danger" value="Send"  onclick="submitForm()" style="border-radius: 10px; display: inline-block; padding: 10px;">
      </div>
      </form>
    </div>
    </div>
</div>
</div>


<div class="container-fluid bg-danger txt-banner">
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
</div>

<div class="card" id="aboutus" style="background-color: #0e1f0b; color: white; text-align: center;">
  <div class="card-body" style="display: flex; flex-direction: column; align-items: center;">
    <h5 class="card-title" style="font-weight: bold; font-size: 30px;">About US</h5>
    <p class="card-text" style="text-align: center;">
      ADDRESS:
      28 Ram Kutir Shopping Centre 
      Nr. Tapi Restaurant 
      Gangeshwar MahaDev Road 
      Adajan, Surat, Gujarat,
      India-395009
    </p>
    <div class="image-container" style="margin-top: 20px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.8356680960983!2d72.7905806!3d21.198686099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04c33b7abf647%3A0x794069859b90b86d!2sAdarsh%20Motor!5e0!3m2!1sen!2sin!4v1692483919135!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="image-container" style="margin-top: 20px;">
    <img src="image/upiqr.png" class="card-img-right" alt="..." style="max-width: 60%;">
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
</div>



<footer class="bg-dark text-center text-white">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <button style="background-color: #0e1f0b; color: aliceblue; font-size: 18px; padding: 10px 20px;"
  data-toggle="modal" data-target="#exampleModaladminlogin">
  ADARSH MOTORS Since 2008
</button>

  </div>
</footer>




<div class="modal fade" id="exampleModalbuy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GET DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div><center>OF AUTOPARTS BRANDS LISTED BELOW BY GETTING SINGNED IN/LOGINED IN</center> 
      <div class="modal-body">
  </div>
</div>
  </div>
</div>

<!-- signup -->

<!-- Button trigger modal -->


<div class="modal fade" id="exampleModalsignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="usersignup">
          <div class="form-group"><i class="fa-solid fa-user"></i>
            <label for="username"><strong>Username</strong></label><small id="signupusername"></small>
            <input type="text" class="form-control" id="username" placeholder="Username">
            
          </div>
          <div class="form-group"><i class="fa-solid fa-phone"></i>
            <label for="phone"><strong>Password</strong></label><small id="signupuserphone"></small>
            <input type="number" class="form-control" id="phone" placeholder="Phone Number">
            
          </div>
          <div class="form-group"><i class="fa-solid fa-envelope"></i>
            <label for="email"><strong>Email</strong></label><small id="signupuseremail"></small>
            <input type="email" class="form-control" id="email" placeholder="Email">
            
          </div>
          <div class="form-group"><i class="fas fa-lock"></i>
            <label for="password"><strong>Password</strong></label><small id="signupuserpass"></small>
            <input type="password" class="form-control" id="password" placeholder="Password">
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span id="successmsg"></span>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          <i class="fas fa-times"></i> Close
        </button>
        <button type="button" class="btn btn-primary" onclick="adduser()" id="signupbutton">
          <i class="fas fa-save"></i> Save Changes
        </button>
      </div>
    </div>
  </div>
</div>



<!--admin login -->

<div class="modal fade" id="exampleModaladminlogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin LogIn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group"><i class="fa-solid fa-envelope"></i>
            <label for="email"><strong>Email</strong></label><small id="loginuseremail"></small>
            <input type="email" class="form-control" id="adminloginemail" placeholder="Email">
          </div>
          <div class="form-group"><i class="fas fa-lock"></i>
            <label for="password"><strong>Password</strong></label><small id="loginuserpass"></small>
            <input type="password" class="form-control" id="adminloginpassword" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <span id="loginmess"></span>
      <div id="spinlogin"></div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          <i class="fas fa-times"></i> Close
        </button>
        <button type="button" class="btn btn-primary" onclick="adminlogin()">
          <i class="fas fa-save"></i> Login
        </button>
      </div>
    </div>
  </div>
</div>


<!--login -->

<div class="modal fade" id="exampleModallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LogIn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="loginemail"><strong>Email</strong></label>
                        <small id="loginuseremail" class="text-danger"></small>
                        <input type="email" class="form-control" id="loginemail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="loginpassword"><strong>Password</strong></label>
                        <small id="loginuserpass" class="text-danger"></small>
                        <input type="password" class="form-control" id="loginpassword" placeholder="Password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span id="loginmess" class="text-success"></span>
                <div id="spinlogin"></div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times"></i> Close
                </button>
                <button type="button" class="btn btn-primary" id="loginButton">
                    <i class="fas fa-save"></i> Login
                </button>
            </div>
        </div>
    </div>
</div>


<script src="model.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
<script type="text/javascript" src="js/adminrequest.js"></script>
<script src="admin/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/userlogin.js"></script>
<script src="feedback.js"></script>
</body>
</html>