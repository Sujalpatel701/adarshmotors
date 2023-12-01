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
    <script src="jquery.js"></script>
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
<div class="row">
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
    <form id="updateformpart">

    <h5>--> FOR updating Part</h5>
    <h6>(with reference to Brand, Model and Part)</h6>

    <label for="updatebrand">Brand Name</label>
    <input type="text" class="form-control" id="updatebrand" name="updatebrand" placeholder="Enter Brand name">
    <span id="brandAvailability"></span><br>

    <label for="updatemodel">Model Name</label>
    <input type="text" class="form-control" id="updatemodel" name="updatemodel" placeholder="Enter Model name">
    <span id="modelAvailability"></span><br>

    <label for="updatepart">Part Name</label>
    <input type="text" class="form-control" id="updatepart" name="updatepart" placeholder="Enter Part name">
    <span id="partAvailability"></span><br>

    </form>




    <form id="priceForm">
    <label for="updateprice">Part Price</label>
    <div class="input-group">
        <input type="text" class="form-control" id="updateprice" name="updateprice" placeholder="Enter Part price">
        <span class="input-group-btn">
            <button class="btn btn-secondary" type="button" onclick="
                var brand = document.getElementById('updatebrand').value;
                var model = document.getElementById('updatemodel').value;
                var part = document.getElementById('updatepart').value;
                var price = document.getElementById('updateprice').value;


                $.ajax({
                    type: 'POST',
                    url: 'updatepartprice.php', 
                    data: {
                        brand: brand,
                        model: model,
                        part: part,
                        price: price
                    },
                    success: function(response) {
                        alert(response);
                        document.getElementById('updateprice').innerHTML = response;
                    },
                    error: function() {
                        alert('Error occurred while processing the request.');
                    }
                });
            ">Button</button>
        </span>
    </div>
</form>
<span id="updateprice"></span><br>

<form id="descForm">
    <label for="updatedesc">Part Description</label>
    <div class="input-group">
        <input type="text" class="form-control" id="updatedesc" name="updatedesc" placeholder="Enter Part description">
        <span class="input-group-btn">
            <button class="btn btn-secondary" type="button" onclick="
                var brand = document.getElementById('updatebrand').value;
                var model = document.getElementById('updatemodel').value;
                var part = document.getElementById('updatepart').value;
                var desc = document.getElementById('updatedesc').value;

                // Validate input if needed

                // Use AJAX to send data to the server
                $.ajax({
                    type: 'POST',
                    url: 'updatepartdesc.php', // Replace with the actual server-side script
                    data: {
                        brand: brand,
                        model: model,
                        part: part,
                        description: desc
                    },
                    success: function(response) {
                        alert(response);
                        document.getElementById('updatedesc').innerHTML = response;
                    },
                    error: function() {
                        alert('Error occurred while processing the request.');
                    }
                });
            ">Button</button>
        </span>
    </div>
</form>
<span id="updatedesc"></span><br>



<form id="imageForm">
    <label for="updateimage">Part Image</label>
    <div class="d-flex">
        <input type="file" class="form-control-file" id="updateimage" name="updateimage" placeholder="Enter Part image">
        <button class="btn btn-secondary ml-2" type="button" onclick="
            var brand = document.getElementById('updatebrand').value;
            var model = document.getElementById('updatemodel').value;
            var part = document.getElementById('updatepart').value;
            var fileInput = document.getElementById('updateimage');
            var file = fileInput.files[0];

            var formData = new FormData();
            formData.append('brand', brand);
            formData.append('model', model);
            formData.append('part', part);
            formData.append('image', file);

            $.ajax({
                type: 'POST',
                url: 'updatepartimage.php',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                },
                error: function() {
                    alert('Error occurred while processing the request.');
                }
            });
        ">Button</button>
    </div>
</form>




</div>


<script src="updatepartcheck.js"></script>
<script src="updatebrandcheck.js"></script>
<script src="updatemodelcheck.js"></script>
</div>
</div>
</div>
</body>
</html>