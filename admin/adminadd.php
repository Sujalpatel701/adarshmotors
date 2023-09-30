<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="../css/admnstyle.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark fixed-top" style="background-color:  #0e1f0b; padding: 10px;color: white;">
    <div class="admin-container">
        <div class="admin-title">ADMIN</div>
        <div class="separator-line"></div>
        <a id="adarsha" class="navbar-brand" href="admindashboard.php">
            ADARSH <small>MOTORS</small>
        </a>
        <div class="separator-line"></div>
        <div class="admin-title">Add</div>
    </div>
    </nav>
</body>
<div class="container-fluid mb-5" style="margin-top: 110px;padding-left:30px">
<div class="row" style="">
<nav class="col-sm-3 col-md-2 sidebar py-5 d-print-none" style="background-color: #0e1f0b; border-radius: 30px; margin-right: 30px;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="admindashboard.php" style="color: aliceblue; font-size: 30px;">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="adminuser.php" style="color: aliceblue; font-size: 30px;">
                            <i class="fab fa-accessible-icon"></i>
                            Users
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="adminadd.php" style="color: aliceblue; font-size: 30px;">
                            <i class="fas fa-users"></i>
                            add
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                    <a class="nav-link" href="adminupdate.php" style="color:aliceblue;font-size:30px">
                        <i class="fas fa-users"></i>
                        update
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="admindelete.php" style="color:aliceblue;font-size:30px">
                        <i class="fas fa-users"></i>
                        delete
                    </a>
                </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="adminfeedback.php" style="color: aliceblue; font-size: 30px;">
                            <i class="fas fa-align-center"></i>
                            Feedback
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    <div>
    
<div class="form-group">
    <form action="#" id="addBrandForm" enctype="multipart/form-data"> <!-- Note the enctype attribute for file uploads -->
        <h5>--> FOR adding New Brand</h5>
        <input type="text" class="form-control" id="brandName" name="brandName" placeholder="Brand name">
        <input type="file" class="form-control-file" id="logoOfBrand" name="logoOfBrand"><br>
        <button type="submit" class="btn btn-primary">Add Brand</button>
    </form>
</div>


  <div class="form-group">
    <form action="">
    <h5>--> FOR adding New Model</h5>
    <label for="exampleFormControlSelect1">Select Brand</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="">New Model</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model name">
    <input type="file" class="form-control-file" id="logo of brand">
    <br>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Add Model</button>
    </form>
  </div>
  <div class="form-group">
    <form action="">
    <h5>--> FOR adding New Part</h5>
    <label for="exampleFormControlSelect2">Select Brand</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="exampleFormControlSelect2">Select Model</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="">New Part</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Part name">
    <label for="">New Part Price</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Part Price">
    <input type="file" class="form-control-file" id="logo of brand">
    <br>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Add Part</button>
    </form>
  </div>
</div>
</div>
</div>
<script src="addbrand.js"></script>
</html>