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
        <div class="admin-title">delete</div>
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
    
<div class="form-group">
    <form id="deleteBrandForm">
        <h5>--> FOR deleting Brand</h5>
        <label for="brandToDelete">Brand Name</label>
        <input type="text" class="form-control" id="brandToDelete" name="brandToDelete" placeholder="Enter Brand name">
        <span id="brandToDeleteCheck"></span><br>
        <button type="submit" class="btn btn-danger">Delete Brand</button>
    </form>
</div>





<div class="form-group">
    <form id="deleteModelForm">
        <h5>--> FOR deleting Model</h5>
        <label for="deletemodelbrand">Brand Name</label>
        <input type="text" class="form-control" id="deletemodelbrand" name="brandToDelete" placeholder="Enter Brand name">
        <span id="deletemodelbrandCheck"></span><br>
        <label for="deletemodelmodel">Model Name</label>
        <input type="text" class="form-control" id="deletemodelmodel" name="modelToDelete" placeholder="Enter Model name">
        <span id="deletemodelmodelCheck"></span><br>
        <button type="submit" class="btn btn-danger">Delete Model</button>
    </form>
</div>




<div class="form-group">
     <form id="deletepartform">
        <h5>--> FOR deleting Part</h5>
        <label for="deletepartbrand">Brand Name</label>
        <input type="text" class="form-control" id="deletepartbrand" name="brandToDelete" placeholder="Enter Brand name">
        <span id="deletepartbrandCheck"></span><br>
        <label for="deletepartmodel">Model Name</label>
        <input type="text" class="form-control" id="deletepartmodel" name="modelToDelete" placeholder="Enter Model name">
        <span id="deletepartmodelCheck"></span><br>
        <label for="deletepartpart">Part Name</label>
        <input type="text" class="form-control" id="deletepartpart" name="partToDelete" placeholder="Enter Part name">
        <span id="deletepartpartCheck"></span><br>
        <button type="submit" class="btn btn-danger">Delete Part</button>
     </form>
</div>
</div>
</div>
</div>
<script src="jquery.js"></script>
<script src="deletebrand.js"></script>
<script src="deletemodel.js"></script>
<script src="deletepart.js"></script>
<script src="deletemodelmodelcheck.js"></script>
<script src="deletemodelbrandcheck.js"></script>
<script src="deletebrandbrandcheck.js"></script>
<script src="deletepartbrandcheck.js"></script>
<script src="deletepartmodelcheck.js"></script>
<script src="deletepartpartcheck.js"></script>
</html>