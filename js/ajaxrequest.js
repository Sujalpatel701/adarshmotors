function adduser() {
    var reg = /^[A-Z0-9._%+-]+(@[A-Z0-9.-]+\.)+[A-Z]{2,4}$/i;
    var username = $("#username").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var password = $("#password").val();

    // Checking for blank fields
    username = $.trim(username);
    phone = $.trim(phone);
    email = $.trim(email);
    password = $.trim(password);

    if (username == '') {
        $("#signupusername").html("<small class='alert alert-danger'>Please Enter Username</small>");
        $("#signupusername").focus();
        return false;
    } else if (phone == '') {
        $("#signupuserphone").html("<small class='alert alert-danger'>Please Enter Phone Number</small>");
        $("#signupuserphone").focus();
        return false;
    } else if (email == '') {
        $("#signupuseremail").html("<small class='alert alert-danger'>Please Enter Email</small>");
        $("#signupuseremail").focus();
        return false;
    } else if (email.trim() != "" && !reg.test(email)) {
        $("#signupuseremail").html("<small class='alert alert-danger'>Please Enter Valid Email</small>");
        $("#signupuseremail").focus();
        return false;
    } else if (password == '') {
        $("#signupuserpass").html("<small class='alert alert-danger'>Please Enter Password</small>");
        $("#signupuserpass").focus();
        return false;
    } else {
        $.ajax({
            url: "user/adduser.php",
            method: "POST",
            dataType: "text",
            data: {
                username: username,
                phone: phone,
                email: email,
                password: password
            },
            success: function (data) {
                console.log(data);

                if (data == "UserAddedSuccessfully") {
                    $("#successmsg").html("<span class='alert alert-success'>Successfully Signed Up</span>");
                    setTimeout(function () {
                    $("#successmsg").html("");
                    }, 2000);
                    emptyfields();
                } else if (data == "EmailAlreadyExists") {
                    $("#signupuseremail").html("<small class='alert alert-danger'>Email Already Exists</small>");
                    $("#signupbutton").attr("disabled", true);
                    setTimeout(function () {
                        $("#signupuseremail").html("");
                    }, 5000);
                    setTimeout(function () {
                        $("#signupbutton").attr("disabled", false);
                    }, 5000);
                    $("#successmsg").html("<span class='alert alert-danger'>Email Already used</span>");
                    setTimeout(function () {
                    $("#successmsg").html("");
                    }, 5000);
                } else if (data == "UserNotExists") {
                    $("#signupuseremail").html("<small class='alert alert-success'>Email Available</small>");
                    $("#signupbutton").attr("disabled", false);
                } else if (data == "UserNotAdded") {
                    $("#successmsg").html("<span class='alert alert-danger'>Unable To Sign Up</span>");
                }
            },
        });
    }
}

function emptyfields() {
    $("#usersignup").trigger("reset");
    $("#signupusername").html("");
    $("#signupuserphone").html("");
    $("#signupuseremail").html("");
    $("#signupuserpass").html("");
}

function makeDelayedRequest() {
    setTimeout(function () {
    }, 5000);
}



function userlogin() {
    var loginemail = $("#loginemail").val();
    var loginpassword = $("#loginpassword").val();

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
            url: "user/userlogin.php",
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
                    window.location.href = "index.php";
                }, 2000);
                } else if (data === "IncorrectPassword") {
                    $("#loginuserpass").html("<small class='alert alert-danger'>Incorrect password</small>");
                } else if (data === "UserNotFound") {
                    $("#loginuseremail").html("<small class='alert alert-danger'>User not found</small>");
                } else {
                }
            },
        });
    }
}


    
