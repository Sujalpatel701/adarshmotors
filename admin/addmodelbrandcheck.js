
$(document).ready(function () {
    $("#addmodelbrand").keyup(function () {
        var brandName = $(this).val().trim();

        if (brandName !== "") {
            $.ajax({
                type: "POST",
                url: "addmodelbrandcheck.php", // Replace with the path to your PHP script
                data: { brandName: brandName },
                success: function (response) {
                    if (response === "exists") {
                        $("#addmodelbrandNameCheck").text("Brand Exists").addClass("text-danger");
                    } else {
                        $("#addmodelbrandNameCheck").text("Brand does not Exists").removeClass("text-danger").addClass("text-success");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed: " + error);
                }
            });
        } else {
            $("#addmodelbrandNameCheck").text("");
        }
    });
});

