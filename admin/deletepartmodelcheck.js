$(document).ready(function () {
    $("#deletepartmodel").keyup(function () {
    var brandName = $("#deletepartbrand").val().trim();
    var modelName = $("#deletepartmodel").val().trim();

    if (brandName !== '' && modelName !== '') {
        $.ajax({
            type: "POST",
            url: "deletepartmodelCheck.php", 
            data: {
                brandName: brandName,
                modelName: modelName
            },
            success: function (response) {
                if (response === "exists") {
                    $("#deletepartmodelCheck").text("Model name already exists").addClass("text-danger");
                } else {
                    $("#deletepartmodelCheck").text("Model name does not exist").removeClass("text-danger").addClass("text-success");
                }
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    } else {
        $("#deletepartmodelCheck").text("");
    }
       
    });
});


    

