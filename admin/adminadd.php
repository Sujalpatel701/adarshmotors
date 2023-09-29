<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    </div>
    </nav>
</body>
<div class="container-fluid mb-5" style="margin-top: 110px;padding-left:30px">
<div class="row" style="">
    <nav class="col-sm-3 col-md-2 sidebar py-5 d-print-none" style="background-color: #0e1f0b; border-radius:30px;margin-right:30px;">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <a class="nav-link" href="admindashboard.php" style="color:aliceblue;font-size:30px">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="adminuser.php" style="color:aliceblue;font-size:30px">
                        <i class="fab fa-accessible-icon"></i>
                        users
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="adminadd.php" style="color:aliceblue;font-size:30px">
                        <i class="fas fa-users"></i>
                        update/add
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="" style="color:aliceblue;font-size:30px">
                        <i class="fas fa-align-center"></i>
                        feedback
                    </a>
                </li>
                
            </ul>
        </div>
    </nav>
    <div>
    <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
</div>
</div>
</div>
</html>