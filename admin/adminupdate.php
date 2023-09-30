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
        <div class="separator-line"></div>
        <div class="admin-title">update</div>
    </div>
    </nav>

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
  <form action="">
    <h5>--> FOR Updating Brand</h5>
    <label for="updateBrandSelect">Select Brand</label>
    <select class="form-control" id="updateBrandSelect">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="">Change name:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="New Brand name">
    <input type="file" class="form-control-file" id="logo of brand">
    <br>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Update Brand</button>
  </form>
</div>
<div class="form-group">
  <form action="">
    <h5>--> FOR Updating Model</h5>
    <label for="updateModelBrandSelect">Select Brand</label>
    <select class="form-control" id="updateModelBrandSelect">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="updateModelSelect">Select Model</label>
    <select class="form-control" id="updateModelSelect">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="">Change name:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="New Model name">
    <input type="file" class="form-control-file" id="logo of brand">
    <br>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Update Model</button>
  </form>
</div>
<div class="form-group">
  <form action="">
    <h5>--> FOR Updating Part</h5>
    <label for="updatePartBrandSelect">Select Brand</label>
    <select class="form-control" id="updatePartBrandSelect">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="updatePartModelSelect">Select Model</label>
    <select class="form-control" id="updatePartModelSelect">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="updatePartSelect">Select Part</label>
    <select class="form-control" id="updatePartSelect">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <label for="">Change name:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="New Part name">
    <input type="file" class="form-control-file" id="logo of brand">
    <br>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Update Part</button>
  </form>
</div>
</div>
</div>
</div>
</body>
</html>