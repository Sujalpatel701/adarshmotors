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
<div class="row">
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
    <form  id="addBrandForm" enctype="multipart/form-data"> 
        <h5>--> FOR adding New Brand</h5>
        <label for="modelName">Brand Name</label>
        <input type="text" class="form-control" id="brandName" name="brandName" placeholder="Brand name">
        <span id="brandNameCheck"></span><br>
        <input type="file" class="form-control-file" id="logoOfBrand" name="logoOfBrand"><br>
        <button type="submit" class="btn btn-primary">Add Brand</button>
    </form>
</div>


<div class="form-group">
    <form  id="addModelForm" enctype="multipart/form-data">
        <h5>-->FOR adding New Model</h5>
        <input type="text" id="addmodelbrand" class="form-control" placeholder="Brand name">
        <span id="addmodelbrandNameCheck"></span><br>
        <label for="modelName">Model Name</label>
        <input type="text" class="form-control" id="addmodelmodelName" placeholder="Model name">
        <span id="addmodelmodelNameCheck"></span><br>
        <input type="file" class="form-control-file" id="modelImage"><br>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="addmodelform">Add Model</button>
    </form>
</div>

<div class="form-group">
<form id="addPartForm" enctype="multipart/form-data">
    <h5>--> FOR adding New Part</h5>
    <label for="addpartBrand">Brand Name</label>
    <input type="text" id="addpartBrand" class="form-control" placeholder="Brand name">
    <span id="addpartBrandNameCheck"></span><br>

    <label for="addpartModel">Model Name</label>
    <input type="text" id="addpartModel" class="form-control" placeholder="Model name">
    <span id="addpartModelNameCheck"></span><br>

    <label for="addpartName">Part Name</label>
    <input type="text" class="form-control" id="addpartName" placeholder="Part name">
    <span id="addpartNameCheck"></span><br>

    <label for="addpartDesc">Part Description</label>
    <input type="text" class="form-control" id="addpartDesc" placeholder="Part Description">
    <span id="addpartDescCheck"></span><br>

    <label for="addpartPrice">Part Price</label>
    <input type="text" class="form-control" id="addpartPrice" placeholder="Part Price">
    <span id="addpartPriceCheck"></span><br>

    <input type="file" class="form-control-file" id="partImage"><br>
    <button type="button" class="btn btn-primary" data-dismiss="modal" id="addpartform">Add Part</button>
</form>

</div>



</div>
</div>
</div>
<script src="addmodel.js"></script>
<script src="addbrand.js"></script>
<script src="addpart.js"></script>
<script src="addbrandcheck.js"></script>
<script src="addmodelbrandcheck.js"></script>
<script src="addmodelmodelcheck.js"></script> 
<script src="addpartbrandcheck.js"></script>
<script src="addpartmodelcheck.js"></script>
<script src="addpartpartcheck.js"></script>
</html>