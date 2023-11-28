$(document).ready(function () {
    $("#updatemodel").keyup(function () {
    var brandName = $("#updatebrand").val().trim();
    var modelName = $("#updatemodel").val().trim();

    if (brandName !== '' && modelName !== '') {
        $.ajax({
            type: "POST",
            url: "updatemodelcheck.php", 
            data: {
                brandName: brandName,
                modelName: modelName
            },
            success: function (response) {
                if (response === "exists") {
                    $("#modelAvailability").text("Model exists").addClass("text-danger");
                } else {
                    $("#modelAvailability").text("Model not exist").removeClass("text-danger").addClass("text-success");
                }
            },
            error: function (xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    } else {
        $("#modelAvailability").text("");
    }
       
    });
});


    

