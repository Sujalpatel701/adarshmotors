$(document).ready(function () {
    $("#addpartBrand").keyup(function () {
        var brandName = $(this).val().trim();

        if (brandName !== "") {
            $.ajax({
                type: "POST",
                url: "addpartbrandcheck.php",
                data: { brandName: brandName },
                success: function (response) {
                    if (response === "exists") {
                        $("#addpartBrandNameCheck").text("Brand exists").addClass("text-danger");
                    } else if (response === "available") {
                        $("#addpartBrandNameCheck").text("Brand not available").addClass("text-success");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed: " + error);
                }
            });
        } else {
            $("#addpartBrandNameCheck").text("");
        }
    });
});
