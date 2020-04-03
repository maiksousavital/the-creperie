$(document).ready(function () {


    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        return re.test(String(email).toLowerCase());
    }

//######################### LOGIN ###########################//

    $('#btn_login').on('click', function () {

        var myForm = document.getElementById('FormLogin');
        var formData = new FormData(myForm);

        var username = myForm.username.value;
        var password = myForm.password.value;

        pError = false;

        if (username == "") {
            $('#username_warning_message').html('The field email must be filled');
            $("#username_warning_message").switchClass("hide", "show");
            pError = true;

        } else {
            if (validateEmail(username)) {
                $("#username_warning_message").switchClass("show", "hide");
            } else {
                $('#username_warning_message').html('Email is not valid.');
                $("#username_warning_message").switchClass("hide", "show");
                pError = true;

            }
        }

        if (password == "") {
            $('#password_warning_message').html('Password is required.');
            $("#password_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#password_warning_message").switchClass("show", "hide");

        }


        if (pError == true) {
            return false;
        }

        $.ajax({
            type: "POST",
            url: 'login/validate_login',
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="username"]').val("");
                $('[name="password"]').val("");
                window.location.href = 'index';

            }, error: function (data) {
                $('#login_error_message').html('Email or Password is incorrect.');
                $("#login_error_message").switchClass("hide", "show");



            }
        });
        return false;
    });


});