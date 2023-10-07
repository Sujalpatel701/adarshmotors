$(document).ready(function () {
    $("#addpartName").keyup(function () {
        var brandName = $("#addpartBrand").val().trim();
        var modelName = $("#addpartModel").val().trim();
        var partName = $(this).val().trim();

        if (brandName !== "" && modelName !== "" && partName !== "") {
            $.ajax({
                type: "POST",
                url: "addpartpartcheck.php",
                data: { brandName: brandName, modelName: modelName, partName: partName },
                success: function (response) {
                    if (response === "exists") {
                        $("#addpartNameCheck").text("Part exists").addClass("text-danger");
                    } else {
                        $("#addpartNameCheck").text("Part not available").removeClass("text-danger");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed: " + error);
                }
            });
        } else {
            $("#addpartNameCheck").text("");
        }
    });
});
