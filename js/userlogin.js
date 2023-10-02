$(document).ready(function () {
    $("#loginButton").click(function () {
        var loginemail = $.trim($("#loginemail").val());
        var loginpassword = $.trim($("#loginpassword").val());

        if (loginemail === '') {
            $("#loginuseremail").text("Enter Email");
            $("#loginuseremail").addClass("text-danger");
            $("#loginemail").focus();
            return;
        }

        if (loginpassword === '') {
            $("#loginuserpass").text("Enter Password");
            $("#loginuserpass").addClass("text-danger");
            $("#loginpassword").focus();
            return;
        }

        $("#loginuseremail, #loginuserpass").text("");
        $("#loginuseremail, #loginuserpass").removeClass("text-danger");

        $("#spinlogin").html("<div class='spinner-border text-success'></div>");
        $.ajax({
            url: "user/userlogin.php",
            method: "POST",
            dataType: "text",
            data: {
                loginemail: loginemail,
                loginpassword: loginpassword
            },
            success: function (data) {
                if (data === "LoginSuccessful") {
                    setTimeout(function () {
                        $("#loginmess").text("Login successful").addClass("text-success");
                        window.location.href = "index.php";
                    }, 1000);
                    window.alert("Login successful");
                } else if (data === "IncorrectPassword") {
                    $("#loginuserpass").text("Incorrect password").addClass("text-danger");
                    window.location.href = "index.php";
                    window.alert("Incorrect password");
                } else if (data === "UserNotFound") {
                    $("#loginuseremail").text("User not found").addClass("text-danger");
                    window.location.href = "index.php";
                    window.alert("User not found");
                }
                $("#spinlogin").html("");
            },
            error: function () {
                $("#spinlogin").html("");
                alert("An error occurred during the login process.");
            }
        });
    });
});
