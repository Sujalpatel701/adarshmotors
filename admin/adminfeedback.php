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
                    <a class="nav-link" href="" style="color:aliceblue;font-size:30px">
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
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">feedbacks of users there</th>
      <th scope="col">First</th>
      <th scope="col">Lauyh</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  </tbody>
</table>
</div>
</div>
</div>
</html>