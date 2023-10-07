$(document).ready(function () {
    $("#addpartModel").keyup(function () {
        var brandName = $("#addpartBrand").val().trim();
        var modelName = $(this).val().trim();

        if (brandName !== "" && modelName !== "") {
            $.ajax({
                type: "POST",
                url: "addpartmodelcheck.php",
                data: { brandName: brandName, modelName: modelName },
                success: function (response) {
                    if (response === "exists") {
                        $("#addpartModelNameCheck").text("Model exists").addClass("text-danger");
                    } else {
                        $("#addpartModelNameCheck").text("Model not available").removeClass("text-danger");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed: " + error);
                }
            });
        } else {
            $("#addpartModelNameCheck").text("");
        }
    });
});
