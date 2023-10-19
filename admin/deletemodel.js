$(document).ready(function () {
    $("#deleteModelForm").submit(function (e) {
        e.preventDefault();

        var brandName = $("#deletemodelbrand").val();
        var modelName = $("#deletemodelmodel").val();

        if (!brandName || !modelName) {
            alert("Please enter both the brand and model name to delete.");
            return;
        }

        // Make an AJAX request to delete the model.
        $.ajax({
            type: "POST",
            url: "deleteModel.php", // Replace with the actual URL of your server-side script for model deletion.
            data: { brandToDelete: brandName, modelToDelete: modelName },
            success: function (response) {
                alert(response); // Display the response from the server-side script.
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    });
});

