$(document).ready(function() {
    $('#updatebrand').on('keyup', function() {
        var brandName = $(this).val();
        checkBrandAvailability(brandName);
    });

    function checkBrandAvailability(brandName) {
        $.ajax({
            type: 'POST',
            url: 'updatebrandcheck.php', 
            data: { brandName: brandName },
            success: function(response) {
                if (response == "Exists") {
                    $('#brandAvailability').text("Exists").addClass("text-danger");
                } else {
                    $('#brandAvailability').text("Not Exists").removeClass("text-danger").addClass("text-success");
                }
            }
        });
    }
});