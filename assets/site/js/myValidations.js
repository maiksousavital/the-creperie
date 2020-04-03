$(document).ready(function () {

    $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
        var rating = data.rating;
        $('#rating').val(rating);
        $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
        $(this).parent().find('.result').text('rating :' + rating);
        $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
    });


    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        return re.test(String(email).toLowerCase());
    }


    $('#btn_save').on('click', function () {

        var myForm = document.getElementById('formReview');
        var formData = new FormData(myForm);

        var name = myForm.name.value;
        var email = myForm.email.value;
        var avatar = document.getElementsByName('avatar');
        var review_text = myForm.review_text.value;
        var rating = myForm.rating.value;

        pError = false;

        if (avatar[0].checked == false && avatar[1].checked == false && avatar[2].checked == false) {
            $('#avatar_warning_message').html('You must choose an avatar!');
            $("#avatar_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#avatar_warning_message").switchClass("d-block", "d-none");

        }

        if (name == "") {
            $('#review_name_warning_message').html('The field name must be filled');
            $("#review_name_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#review_name_warning_message").switchClass("d-block", "d-none");

        }

        if (email == "") {
            $('#review_email_warning_message').html('The field email must be filled');
            $("#review_email_warning_message").switchClass("d-none", "d-block");
            pError = true;

        } else {
            if (validateEmail(email)) {
                $("#review_email_warning_message").switchClass("d-block", "d-none");
            } else {
                $('#review_email_warning_message').html('Email is not valid.');
                $("#review_email_warning_message").switchClass("d-none", "d-block");
                pError = true;

            }
        }

        if (review_text == "") {
            $('#review_warning_message').html('The field review must be filled');
            $("#review_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#review_warning_message").switchClass("d-block", "d-none");

        }


        if (pError == true) {
            return false;
        }


        $.ajax({
            type: "POST",
            url: base_url+"home/save_rating",
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="name"]').val("");
                $('[name="email"]').val("");
                $('[name="review"]').val("");
                $('[name="avatar"]').val("");
                $('#myModal').modal('hide');

                $('#review_success_message').html('Your review has been sent!');
                $("#review_success_message").switchClass("d-none", "d-block");

            }, error: function (data) {
                $('#review_error_message').html('Some error occurred!');
                $("#review_error_message").switchClass("d-none", "d-block");
            }
        });

        return false;
    });

    $('#btn_add_booking').on('click', function () {

        var myForm = document.getElementById('formAddBooking');
        var formData = new FormData(myForm);

        var name = myForm.name.value;
        var email = myForm.email.value;
        var phone = myForm.phone.value;
        var date = myForm.date.value;
        var time = myForm.time.value;
        var num_people = myForm.num_people.value;


        pError = false;


        if (name == "") {
            $('#booking_name_warning_message').html('The field name must be filled');
            $("#booking_name_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#booking_name_warning_message").switchClass("d-block", "d-none");

        }

        if (email == "") {
            $('#booking_email_warning_message').html('The field email must be filled');
            $("#booking_email_warning_message").switchClass("d-none", "d-block");
            pError = true;

        } else {
            if (validateEmail(email)) {
                $("#booking_email_warning_message").switchClass("d-block", "d-none");
            } else {
                $('#booking_email_warning_message').html('Email is not valid.');
                $("#booking_email_warning_message").switchClass("d-none", "d-block");
                pError = true;

            }
        }

        if (phone == "") {
            $('#booking_phone_warning_message').html('The field phone must be filled');
            $("#booking_phone_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#booking_phone_warning_message").switchClass("d-block", "d-none");

        }

        if (date == "") {
            $('#booking_date_warning_message').html('The field date must be filled');
            $("#booking_date_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#booking_date_warning_message").switchClass("d-block", "d-none");

        }

        if (time == "") {
            $('#booking_time_warning_message').html('The field time must be filled');
            $("#booking_time_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#booking_time_warning_message").switchClass("d-block", "d-none");

        }

        if (num_people == "") {
            $('#booking_num_people_warning_message').html('The field number of people must be filled');
            $("#booking_num_people_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#booking_num_people_warning_message").switchClass("d-block", "d-none");

        }


        if (pError == true) {
            return false;
        }


        $.ajax({
            type: "POST",
            url: base_url+"home/add_booking",
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="name"]').val("");
                $('[name="email"]').val("");
                $('[name="phone"]').val("");
                $('[name="date"]').val("");
                $('[name="time"]').val("");
                $('[name="num_people"]').val("");
                $('#myModal').modal('hide');

                $('#add_booking_success_message').html('Your booking has been sent!');
                $("#add_booking_success_message").switchClass("d-none", "d-block");

            }, error: function (data) {
                $('#add_booking_error_message').html('Some error occurred!');
                $("#add_booking_error_message").switchClass("d-none", "d-block");
            }
        });

        return false;
    });

    $('#btn_send_message').on('click', function () {

        var myForm = document.getElementById('formContact');
        var formData = new FormData(myForm);

        var name = myForm.name.value;
        var email = myForm.email.value;
        var subject = myForm.subject.value;
        var message = myForm.message.value;

        pError = false;

        if (name == "") {
            $('#name_warning_message').html('The field name must be filled');
            $("#name_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#name_warning_message").switchClass("d-block", "d-none");

        }

        if (email == "") {
            $('#email_warning_message').html('The field email must be filled');
            $("#email_warning_message").switchClass("d-none", "d-block");
            pError = true;

        } else {
            if (validateEmail(email)) {
                $("#email_warning_message").switchClass("d-block", "d-none");
            } else {
                $('#email_warning_message').html('Email is not valid.');
                $("#email_warning_message").switchClass("d-none", "d-block");
                pError = true;

            }
        }

        if (subject == "") {
            $('#subject_warning_message').html('The field subject must be filled');
            $("#subject_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#subject_warning_message").switchClass("d-block", "d-none");

        }

        if (message == "") {
            $('#message_warning_message').html('The field message must be filled');
            $("#message_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#message_warning_message").switchClass("d-block", "d-none");

        }

        if (pError == true) {
            return false;
        }

        $.ajax({
            type: "POST",
            url: base_url+"home/send_message",
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="name"]').val("");
                $('[name="email"]').val("");
                $('[name="subject"]').val("");
                $('[name="message"]').val("");
                $('#myModal').modal('hide');

                $('#contact_success_message').html('Your message has been sent!');
                $("#contact_success_message").switchClass("d-none", "d-block");
                //send_sms();
                //send_email();

            }, error: function (data) {
                $('#contact_error_message').html('Some error occurred!');
                $("#contact_error_message").switchClass("d-none", "d-block");
            }
        });

        return false;
    });

    function send_sms() {
        $.ajax({
            type: 'ajax',
            url: base_url+'home/send_sms',
            success: function () {

            }

        });

    }

    function send_email() {
        $.ajax({
            type: 'ajax',
            url: base_url+'home/send_email',
            success: function () {

            }

        });

    }

    $('#btn_newsletter').on('click', function () {

        var myForm = document.getElementById('formNewsletter');
        var formData = new FormData(myForm);

        var email = myForm.email.value;

        pError = false;

        if (email == "") {
            $('#email_newsLetter_warning_message').html('You must provide your email.');
            $("#email_newsLetter_warning_message").switchClass("d-nome", "d-block");
            pError = true;
        } else {
            $("#email_newsLetter_warning_message").switchClass("d-block", "d-nome");

        }


        if (pError == true) {
            return false;
        }

        //var checked = check_subscription(email);

            $.ajax({
                type: "POST",
                url: 'home/news_letter',
                dataType: "JSON",
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('[name="email"]').val("");

                    $('#newsletter_success_message').html('You are now subscribed!');
                    $("#newsletter_success_message").switchClass("d-nome", "d-block");


                }, error: function (data) {
                    $('#newsletter_error_message').html('Some error occurred!');
                    $("#newsletter_error_message").switchClass("d-nome", "d-block");


                }
            });


        return false;


    });

    function check_subscription(email) {
        var bool = false;
        $.ajax({
            type: 'ajax',
            url: 'home/check_subscription',
            method: "GET",
            async: true,
            dataType: 'json',
            data: {email: email},
            success: function (data) {

                if (data.length === 0) {
                     bool = true;
                } else {
                    alert(data[0].email);
                    $('#newsletter_error_message').html('This email is already subscribed.');
                    $("#newsletter_error_message").switchClass("d-nome", "d-block");
                    bool == false;
                }
            }
        });

        return bool;
    }

    //load_gallery_pictures(1);
    function load_gallery_pictures(page) {
        $.ajax({
            url: "home/pagination/" + page,
            method: "GET",
            dataType: "json",
            success: function (data) {
                $('#gallery_pictures').html(data.gallery_pictures);
                $('#pagination_link').html(data.pagination_link);
            }
        });
    }


    $(document).on("click", ".pagination li a", function (event) {
        event.preventDefault();
        var page = $(this).data("ci-pagination-page");
        //load_country_data(page);
    });

});


