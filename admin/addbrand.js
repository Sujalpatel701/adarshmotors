$(document).ready(function () {
    $("#addBrandForm").submit(function (e) {
        e.preventDefault(); 

        var brandName = $("#brandName").val();
        var logoFile = $("#logoOfBrand")[0].files[0];

        if (!brandName || !logoFile) {
            alert("Please fill out all fields.");
            return;
        }

       
        var formData = new FormData();
        formData.append("brandName", brandName);
        formData.append("logoOfBrand", logoFile);

   
        $.ajax({
            type: "POST",
            url: "addbrand.php",
            data: formData,
            contentType: false, 
            processData: false, 
            success: function (response) {
                alert(response); 
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    });
});