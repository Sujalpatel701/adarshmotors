function updatePart() {
    var brandName = $('#updatebrand').val().trim();
    var modelName = $('#updatemodel').val().trim();
    var partName = $('#updatepart').val().trim();
    var partPrice = $('#updateprice').val().trim();
    var partDesc = $('#updatedesc').val().trim();
    var partImage = $('#updateimage').val();

    if (brandName !== "" && modelName !== "" && partName !== "") {
        var formData = new FormData($('#updateformpart')[0]);

        $.ajax({
            type: 'POST',
            url: 'update_part.php', 
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {

                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error("Ajax request failed: " + error);
            }
        });
    } else {
        alert('Brand name, model name, and part name are required.');
    }
}