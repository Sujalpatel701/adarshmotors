$(document).ready(function () {
    $("#addBrandForm").submit(function (e) {
        e.preventDefault(); // Prevent the form from submitting traditionally

        var brandName = $("#brandName").val();
        var logoFile = $("#logoOfBrand")[0].files[0];

        if (!brandName || !logoFile) {
            alert("Please fill out all fields.");
            return;
        }

        // Create a FormData object to send files
        var formData = new FormData();
        formData.append("brandName", brandName);
        formData.append("logoOfBrand", logoFile);

        // Send an Ajax POST request to your server-side script
        $.ajax({
            type: "POST",
            url: "addbrand.php", // Replace with the URL of your server-side script
            data: formData,
            contentType: false, // Important for sending files
            processData: false, // Important for sending files
            success: function (response) {
                alert(response); // Display success or error message from the server
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    });
});