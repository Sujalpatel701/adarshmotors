$(document).ready(function () {
    $("#deletemodelbrand").keyup(function () {
        var brandName = $(this).val().trim();

        if (brandName !== "") {
            $.ajax({
                type: "POST",
                url: "deletemodelbrandcheck.php", 
                data: { brandName: brandName },
                success: function (response) {
                    if (response === "exists") {
                        $("#deletemodelbrandCheck").text("Brand exists").addClass("text-danger");
                    } else {
                        $("#deletemodelbrandCheck").text("Brand not available").removeClass("text-danger").addClass("text-success");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed: " + error);
                }
            });
        } else {
            $("#deletemodelbrandCheck").text("");
        }
    });
});