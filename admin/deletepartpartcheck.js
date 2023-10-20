$(document).ready(function () {
    $("#deletepartpart").keyup(function () {
    var partName = $("#deletepartpart").val().trim();
    var brandName = $("#deletepartbrand").val().trim();
    var modelName = $("#deletepartmodel").val().trim();

    if (brandName !== '' && modelName !== '') {
        $.ajax({
            type: "POST",
            url: "deletepartpartcheck.php", 
            data: {
                brandName: brandName,
                modelName: modelName,
                partName: partName
            },
            success: function (response) {
                if (response === "exists") {
                    $("#deletepartpartCheck").text("Part exists").addClass("text-danger");
                } else {
                    $("#deletepartpartCheck").text("Part does not exist").removeClass("text-danger").addClass("text-success");
                }
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    } else {
        $("#deletepartpartCheck").text("");
    }
       
    });
});


    

