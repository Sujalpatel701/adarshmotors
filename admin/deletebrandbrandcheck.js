$(document).ready(function () {
    $("#brandToDelete").keyup(function () {
        var brandName = $(this).val().trim();

        if (brandName !== "") {
            $.ajax({
                type: "POST",
                url: "deletebrandbrandcheck.php", 
                data: { brandName: brandName },
                success: function (response) {
                    if (response === "exists") {
                        $("#brandToDeleteCheck").text("Brand exists").addClass("text-danger");
                    } else {
                        $("#brandToDeleteCheck").text("Brand not available").removeClass("text-danger").addClass("text-success");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed: " + error);
                }
            });
        } else {
            $("#brandToDeleteCheck").text("");
        }
    });
});