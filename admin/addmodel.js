$(document).ready(function () {
    $("#addmodelform").click(function () {
        // Get form data
        var brandName = $("#addmodelbrand").val();
        var modelName = $("#addmodelmodelName").val();
        var modelImage = $("#modelImage")[0].files[0];

        // Perform client-side validation here if needed

        // Create FormData object for file upload
        var formData = new FormData();
        formData.append("brandName", brandName);
        formData.append("modelName", modelName);
        formData.append("modelImage", modelImage);

        // Send an Ajax POST request to the server-side PHP script
        $.ajax({
            type: "POST",
            url: "addmodel.php", // Replace with the URL of your server-side script
            data: formData,
            contentType: false, // Important for sending files
            processData: false, // Important for sending files
            success: function (response) {
                alert(response); 
                }, 
                error: function (xhr, status, error) {
                    alert("Failed to add model. Please try again.");
                }
            },);
        });
    });


