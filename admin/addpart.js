$(document).ready(function () {
    $("#addpartform").click(function () {
        // Get form data
        var brandName = $("#addpartBrand").val();
        var modelName = $("#addpartModel").val();
        var partName = $("#addpartName").val();
        var partPrice = $("#addpartPrice").val();
        var partImage = $("#partImage")[0].files[0];

        // Perform client-side validation here if needed

        // Create FormData object for file upload
        var formData = new FormData();
        formData.append("brandName", brandName);
        formData.append("modelName", modelName);
        formData.append("partName", partName);
        formData.append("partPrice", partPrice);
        formData.append("partImage", partImage);

        // Send an Ajax POST request to the server-side PHP script
        $.ajax({
            type: "POST",
            url: "addpart.php", // Replace with the URL of your server-side script
            data: formData,
            contentType: false, // Important for sending files
            processData: false, // Important for sending files
            success: function (response) {
                alert(response); // Handle the response from the server
            },
            error: function (xhr, status, error) {
                alert("Failed to add part. Please try again.");
            }
        });
    });
});
