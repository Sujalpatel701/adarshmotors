function submitForm() {
    var name = $("#feedbackname").val();
    var subject = $("#feedbacksub").val();
    var email = $("#feedbackmail").val();
    var message = $("#feedbackfeed").val();

    name = $.trim(name);
    subject = $.trim(subject);
    email = $.trim(email);
    message = $.trim(message);

    if (name == '') {
        $("#feedbackspan").html("<small class='alert alert-danger'>Enter Name</small>");
        $("#feedbackspan").focus();
        return false;
    }
    else if(subject == '') {
        $("#feedbackspan").html("<small class='alert alert-danger'>Enter Subject</small>");
        $("#feedbackspan").focus();
        return false;
    }
    else if(email == '') {
        $("#feedbackspan").html("<small class='alert alert-danger'>Enter Email</small>");
        $("#feedbackspan").focus();
        return false;
    }
    else if(message == '') {
        $("#feedbackspan").html("<small class='alert alert-danger'>Enter Message</small>");
        $("#feedbackspan").focus();
        return false;
    }else{

    $.ajax({
        type: "POST",
        url: "feedback.php", 
        data: {
            name: name,
            subject: subject,
            email: email,
            message: message
        },
        success: function (data) {
            if(data==="successfully"){
            $("#feedbackspan").html("<span class='alert alert-success'>Feedback sent successfully</span>");
            setTimeout(function () {
                window.location.href = "index.php";
            }, 2000);
        }},
    });
    return false;
}
}