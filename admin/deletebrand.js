$(document).ready(function () {
    $("#deleteBrandForm").submit(function (e) {
        e.preventDefault(); 

        var brandName = $("#brandToDelete").val();

        if (!brandName) {
            alert("Please enter a brand name to delete.");
            return;
        }

        // Make an AJAX request to delete the brand.
        $.ajax({
            type: "POST",
            url: "deletebrand.php", // Replace with the actual URL of your server-side script for brand deletion.
            data: { brandToDelete: brandName },
            success: function (response) {
                alert(response); // Display the response from the server-side script.
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    });
});
