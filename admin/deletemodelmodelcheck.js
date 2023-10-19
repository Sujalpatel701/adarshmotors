$(document).ready(function () {
    $("#deletemodelmodel").keyup(function () {
    var brandName = $("#deletemodelbrand").val().trim();
    var modelName = $("#deletemodelmodel").val().trim();

    if (brandName !== '' && modelName !== '') {
        $.ajax({
            type: "POST",
            url: "deletemodelmodelcheck.php", 
            data: {
                brandName: brandName,
                modelName: modelName
            },
            success: function (response) {
                if (response === "exists") {
                    $("#deletemodelmodelCheck").text("Model name already exists").addClass("text-danger");
                } else {
                    $("#deletemodelmodelCheck").text("Model name does not exist").removeClass("text-danger").addClass("text-success");
                }
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    } else {
        $("#deletemodelmodelCheck").text("");
    }
       
    });
});


    

