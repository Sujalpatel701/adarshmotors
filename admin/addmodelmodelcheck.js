$(document).ready(function () {
    $("#addmodelmodelName").keyup(function () {
    var brandName = $("#addmodelbrand").val().trim();
    var modelName = $("#addmodelmodelName").val().trim();

    if (brandName !== '' && modelName !== '') {
        $.ajax({
            type: "POST",
            url: "addmodelmodelcheck.php", 
            data: {
                brandName: brandName,
                modelName: modelName
            },
            success: function (response) {
                if (response === "exists") {
                    $("#addmodelmodelNameCheck").text("Model name already exists").addClass("text-danger");
                } else {
                    $("#addmodelmodelNameCheck").text("Model name does not exist").removeClass("text-danger").addClass("text-success");
                }
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    } else {
        $("#addmodelmodelNameCheck").text("");
    }
       
    });
});


    

