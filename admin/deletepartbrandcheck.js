$(document).ready(function () {
    $("#deletepartbrand").keyup(function () {
        var brandName = $(this).val().trim();

        if (brandName !== "") {
            $.ajax({
                type: "POST",
                url: "deletepartbrandCheck.php", 
                data: { brandName: brandName },
                success: function (response) {
                    if (response === "exists") {
                        $("#deletepartbrandCheck").text("Brand exists").addClass("text-danger");
                    } else {
                        $("#deletepartbrandCheck").text("Brand not available").removeClass("text-danger").addClass("text-success");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed: " + error);
                }
            });
        } else {
            $("#deletepartbrandCheck").text("");
        }
    });
});