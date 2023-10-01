$(document).ready(function () {
    $("#brandName").keyup(function () {
        var brandName = $(this).val().trim();

        if (brandName !== "") {
            $.ajax({
                type: "POST",
                url: "addbrandcheck.php", 
                data: { brandName: brandName },
                success: function (response) {
                    if (response === "exists") {
                        $("#brandNameCheck").text("Brand name already exists").addClass("text-danger");
                    } else {
                        $("#brandNameCheck").text("Brand name is available").removeClass("text-danger").addClass("text-success");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed: " + error);
                }
            });
        } else {
            $("#brandNameCheck").text("");
        }
    });
});

