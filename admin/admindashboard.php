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
        <div class="admin-title">Dashboard</div>
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
            <div class="card-body">
                <?php
                    include('../dbconnection.php');
                    $sql = "SELECT * FROM `user`";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_num_rows($result);
                    echo '<h4 class="card-title">Number of Users</h4>';
                    echo '<label style="font-size: 30px;">-->'.$row.'</label>';

                    $sql1 = "SELECT * FROM `feedback`";
                    $result1 = mysqli_query($conn, $sql1);
                    $row1 = mysqli_num_rows($result1);
                    echo '<h4 class="card-title">Number of Feedbacks</h4>';
                    echo '<span style="font-size: 30px;">-->'.$row1.'</span>';

                    $sql2 = "SELECT * FROM `brand`";
                    $result2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_num_rows($result2);
                    echo '<h4 class="card-title">Number of Brands</h4>';
                    echo '<span style="font-size: 30px;">-->'.$row2.'</span>';

                    $sql3 = "SELECT * FROM `model`";
                    $result3 = mysqli_query($conn, $sql3);
                    $row3 = mysqli_num_rows($result3);
                    echo '<h4 class="card-title">Number of Models</h4>';
                    echo '<span style="font-size: 30px;">-->'.$row3.'</span>';

                    $sql4 = "SELECT * FROM `part`";
                    $result4 = mysqli_query($conn, $sql4);
                    $row4 = mysqli_num_rows($result4);
                    echo '<h4 class="card-title">Number of Parts</h4>';
                    echo '<span style="font-size: 30px;">-->'.$row4.'</span>';

                ?>
            </div>
          
    </div>
</div>

</html>