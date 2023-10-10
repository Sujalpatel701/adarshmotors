$(document).ready(function() {
    $('#addpartform').click(function() {

        var brand = $('#addpartBrand').val();
        var model = $('#addpartModel').val();
        var partName = $('#addpartName').val();
        var partDesc = $('#addpartDesc').val();
        var partPrice = $('#addpartPrice').val();
        var partImage = $('#partImage')[0].files[0];

       
        var formData = new FormData();
        formData.append('brand', brand);
        formData.append('model', model);
        formData.append('partName', partName);
        formData.append('partDesc', partDesc);
        formData.append('partPrice', partPrice);
        formData.append('partImage', partImage);

   
        $.ajax({
            url: 'addpart.php', 
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                alert(response);
                console.log(response);
            }
        });
    });
});