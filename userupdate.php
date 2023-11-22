<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/admnstyle.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark fixed-top" style="background-color:  #0e1f0b; padding: 10px;color: white;">
    <div class="admin-container">
        <div class="admin-title">USER Dashboard</div>
        <div class="separator-line"></div>
        <a id="adarsha" class="navbar-brand" href="admindashboard.php">
            ADARSH <small>MOTORS</small>
        </a>
    </div>
    </nav>
</body>


<div class="container-fluid mb-5" style="margin-top: 110px; padding-left: 30px;">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-sm-3 col-md-2 sidebar py-5 d-print-none" style="background-color: #0e1f0b; border-radius: 30px; margin-right: 30px;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="user.php" style="color: aliceblue; font-size: 30px;">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="useradd.php" style="color: aliceblue; font-size: 30px;">
                             Add Data
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="userupdate.php" style="color: aliceblue; font-size: 30px;">
                            Update Data
                        </a>
                    </li>    
                </ul>
            </div>
      </nav>
<div> 
<style>
    body{
        background-color: #f0f0f0;
    }
    .profile {
            width: 350px;
            background-color: #ffffff;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
        }

        .profile h1 {
            font-size: 24px;
        }

        .profile p {
            font-size: 16px;
            color: #555;
        }
</style>
<div class="profile">
<form>
    <h5>-->Update Image</h5>
    <input type="file" name="" id="">
    <br>
    <br>    
    <button type="button" class="btn btn-success">Update Image</button>
    </form>
    <br>
    <form action="">
    <h5>-->Update Address</h5>
    <input type="text" name="" id="" placeholder="Update Address">
    <br><br>
    <button type="button"  class="btn btn-success">Update Address</button>
    </form>
    <br>
    <form action="">
    <h5>-->Update Occupation</h5>
    <input type="text" name="" id="" placeholder="Update Occupation">
    <br><br>
    <button type="button"  class="btn btn-success">Update Occupation</button>
    </form>
    <br>
    <form action="">
    <h5>-->Update Phone Number</h5>
    <input type="text" name="" id="" placeholder="Update Number">
    <br><br>
    <button type="button"  class="btn btn-success">Update Number</button>
    </form>
    <br>
    <form action="">
    <h5>-->Update Name</h5>
    <input type="text" name="" id="" placeholder="Update Occupation">
    <br><br>
    <button type="button"  class="btn btn-success">Update Name</button>
    </form>
    <br>
</div>
</div>
</div>
<?php
session_start(); 
if (isset($_SESSION['useremail'])) {
    echo "User Email: " . $_SESSION['useremail'];
} else {
    echo "User email not set in the session.";
}
echo "<br>";
if (isset($_SESSION['username'])) {
    echo "Username: " . $_SESSION['username'];
} else {
    echo "Username not set in the session.";
}
?>

</html>