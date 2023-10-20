$(document).ready(function () {
    $("#deletepartform").submit(function (e) {
        e.preventDefault();

        var brandName = $("#deletepartbrand").val();
        var modelName = $("#deletepartmodel").val();
        var partName = $("#deletepartpart").val();

        if (!brandName || !modelName || !partName) {
            alert("Please enter brand, model, and part names to delete.");
            return;
        }

        // Make an AJAX request to delete the part.
        $.ajax({
            type: "POST",
            url: "deletePart.php", // Replace with the actual URL of your server-side script for part deletion.
            data: { brandName: brandName, modelName: modelName, partName: partName },
            success: function (response) {
                alert(response); // Display the response from the server-side script.
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    });
});
