$(document).ready(function () {
    $("#updatepart").keyup(function () {
    var partName = $("#updatepart").val().trim();
    var brandName = $("#updatebrand").val().trim();
    var modelName = $("#updatemodel").val().trim();

    if (brandName !== '' && modelName !== '') {
        $.ajax({
            type: "POST",
            url: "updatepartcheck.php", 
            data: {
                brandName: brandName,
                modelName: modelName,
                partName: partName
            },
            success: function (response) {
                if (response === "exists") {
                    $("#partAvailability").text("Part exists").addClass("text-danger");
                } else {
                    $("#partAvailability").text("Part does not exist").removeClass("text-danger").addClass("text-success");
                }
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    } else {
        $("#partAvailability").text("");
    }
       
    });
});