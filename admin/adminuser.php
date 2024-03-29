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
        <div class="admin-title">User</div>
    </div>
    </nav>
</body>
<div class="container-fluid mb-5" style="margin-top: 110px;padding-left:30px">
<div class="row" >
<nav class="col-sm-3 col-md-2 sidebar py-5 d-print-none" style="background-color: #0e1f0b; border-radius: 30px; margin-right: 30px;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="admindashboard.php" style="color: aliceblue; font-size: 30px;">
                           
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="adminuser.php" style="color: aliceblue; font-size: 30px;">
                            
                            Users
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="adminadd.php" style="color: aliceblue; font-size: 30px;">
                           add
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                    <a class="nav-link" href="adminupdate.php" style="color:aliceblue;font-size:30px">
                       
                        update
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="admindelete.php" style="color:aliceblue;font-size:30px">
                       
                        delete
                    </a>
                </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="adminfeedback.php" style="color: aliceblue; font-size: 30px;">
                         
                            Feedback
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    <div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">User_name</th>
      <th scope="col">User_phone</th>
      <th scope="col">User_email</th>
      <th scope="col">User_address</th>
      <th scope="col">User_occupation</th>
      <th scope="col">User_image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      include("dbconnect.php");
        $sql="SELECT * FROM `user`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
          $user_name=$row['user_name'];
          $user_phone=$row['user_phone'];
          $user_email=$row['user_email'];
          $user_add=$row['user_add'];
          $user_ocu=$row['user_ocu'];
          $user_img=$row['user_img'];
          echo '<tr>
          <td>'.$user_name.'</td>
          <td>'.$user_phone.'</td>
          <td>'.$user_email.'</td>
          <td>'.$user_add.'</td>
          <td>'.$user_ocu.'</td>
          <td><img src="../user/userimg/' . $user_img . '" alt="User Image" style="width: 150px;"></td>
          </tr>';
        }
      ?>
    </tr>
  </tbody>
</table>
  </tbody>
</table>
</div>
</div>
</div>
</html>