function adminlogin() {
    echo= "hello";
    var loginemail = $("#adminloginemail").val();
    var loginpassword = $("#adminloginpassword").val();

    loginemail = $.trim(loginemail);
    loginpassword = $.trim(loginpassword);

    if (loginemail == '') {
        $("#loginuseremail").html("<small class='alert alert-danger'>Enter Email</small>");
        $("#loginuseremail").focus();
        return false;
    } else if (loginpassword == '') {
        $("#loginuserpass").html("<small class='alert alert-danger'>Enter Password</small>");
        $("#loginuserpass").focus();
        return false;
    } else {
        $.ajax({
            url: "admin/admin.php",
            method: "POST",
            dataType: "text",
            data: {
                loginemail: loginemail,
                loginpassword: loginpassword
            },
            success: function(data) {
                if (data === "LoginSuccessful") {
                    $("#loginmess").html("<span class='alert alert-success'>Login sucessful</span>");
                    $("#spinlogin").html("<div class='spinner-border text-sucess'></div>");
                    setTimeout(function () {
                    window.location.href = "admin/admindashboard.php";
                }, 2000);
                } else if (data === "IncorrectPassword") {
                    $("#loginuserpass").html("<small class='alert alert-danger'>Incorrect password</small>");
                } else if (data === "UserNotFound") {
                    $("#loginuseremail").html("<small class='alert alert-danger'>Admin not found</small>");
                } else {
                }
            },
        });
    }
}
