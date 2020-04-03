$(document).ready(function () {
    function e(e) {
        $.ajax({
            url: "/ajax/" + $.urlParam("page") + "_list_ajax.php",
            method: "POST",
            data: {page: e},
            success: function (e) {
                $("#" + $.urlParam("page") + "_data").html(e)
            }
        })
    }

    function a(e) {
        return /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(e)
    }

    $.urlParam = function (e) {
        var a = new RegExp("[?&]" + e + "=([^&#]*)").exec(window.location.search);
        return null !== a && (a[1] || 0)
    }, "car" == $.urlParam("page") && e(), "user" == $.urlParam("page") && e(), "staff_reports" == $.urlParam("page") && ($.ajax({
        url: "/ajax/staff_report_available_cars_list_ajax.php",
        method: "POST",
        data: {},
        success: function (e) {
            $("#staff_report_available_cars_list_ajax").html(e)
        }
    }), $.ajax({
        dataType: "json",
        type: "POST",
        url: "/ajax/staff_report_available_cars_graph_ajax.php",
        data: {}
    }).done(function (e) {
        e = [{values: [e.available, e.non_available], labels: ["Available", "Non-available"], type: "pie"}];
        Plotly.newPlot("staff_report_available_cars_graph_ajax", e, {
            title: "Graphical representation of a car availability",
            font: {size: 18}
        }, {showSendToCloud: !0})
    }), $.ajax({
        url: "/ajax/staff_report_users_list_ajax.php", method: "POST", data: {}, success: function (e) {
            $("#staff_report_users_list_ajax").html(e)
        }
    }), $.ajax({
        dataType: "json",
        type: "POST",
        url: "/ajax/staff_report_users_graph_ajax.php",
        data: {}
    }).done(function (e) {
        e = [{
            x: ["Administrator", "Staff", "Customer"],
            y: [e.administrator, e.staff, e.customer],
            marker: {color: ["rgba(255,0,0,0.3)", "rgba(0,255,0,0.3)", "rgba(0,0,255,0.3)"]},
            type: "bar"
        }];
        Plotly.newPlot("staff_report_users_graph_ajax", e, {
            title: "Graphical representation of available user roles",
            font: {size: 18}
        }, {showSendToCloud: !0})
    })), $(document).on("click", ".pagination_link", function () {
        e($(this).attr("page_id"))
    }), $(".only_integers_allowed").on("keyup keypress", function (e) {
        if (8 != e.keyCode && 46 != e.keyCode) {
            return -1 != "1234567890".indexOf(String.fromCharCode(e.which))
        }
    }), $(".only_defined_integers_allowed").on("keyup keypress", function (e) {
        var a = $(this).attr("id").trim(), s = $("#" + a).val().trim();
        if ("year" == a && s.length > 3) return !1
    }), $(document).on("click", ".accept_or_reject_rental_requests", async function () {
        var e = $(this).attr("data-id").trim(), a = $(this).attr("data-action").trim(),
            s = $(this).attr("data-user-id").trim();
        if ("reject" == a) {
            const {value: r} = await Swal.fire({
                input: "textarea",
                title: "Are you sure you want to reject request with id:" + e + "?",
                type: "question",
                text: "If Yes, please provide a rejection reason for that!",
                inputPlaceholder: "Type a rejection reason",
                inputAttributes: {"aria-label": "Type your message here"},
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, reject it!"
            });
            if ("" == r) return Swal.fire({type: "warning", text: "Please fill the reject reason!"}), !1;
            r && $.ajax({
                type: "POST",
                url: "/ajax/staff_accept_or_reject_rental_requests_ajax.php",
                data: {id: e, action: a, user_id: s},
                success: function (a) {
                    if (1 == a.resultOK) return Swal.fire("Congradulations!", "You have just rejected a car request!", "success"), $("#button_reject_" + e).remove(), $("#button_" + e).html("<button id='button_accept_" + e + "' type='button' class='btn btn-success accept_or_reject_rental_requests' data-id='" + e + "' data-action='accept' data-user-id='" + s + "'>Accept</button>"), $("#record_" + e).css("background-color", "#FF0000"), $("#recordText_" + e).html("Rejected"), $.ajax({
                        type: "POST",
                        url: "/ajax/send_email_ajax.php",
                        data: {
                            user_id: s,
                            email_subject: "A rental request reject notification",
                            email_message: "Sorry, but we reject your request. The reason is " + r
                        },
                        async: !0,
                        success: function (e) {
                            if (1 == e.resultOK) {
                                return Swal.mixin({
                                    toast: !0,
                                    position: "top-end",
                                    showConfirmButton: !1,
                                    timer: 3e3
                                }).fire({type: "success", title: "Email notification has been sent successfully"}), !1
                            }
                        }
                    }), !1
                }
            })
        }
        "accept" == a && Swal.fire({
            title: "Are you sure you want to accept request with id:" + e + "?",
            text: "You won't be able to revert this!",
            type: "question",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, accept it!"
        }).then(r => {
            r.value && $.ajax({
                type: "POST",
                url: "/ajax/staff_accept_or_reject_rental_requests_ajax.php",
                data: {id: e, action: a, user_id: s},
                success: function (a) {
                    if (1 == a.resultOK) return $("#button_accept_" + e).remove(), $("#button_" + e).html("<button id='button_reject_" + e + "' type='button' class='btn btn-danger accept_or_reject_rental_requests' data-id='" + e + "' data-action='reject' data-user-id='" + s + "'>Reject</button>"), $("#record_" + e).css("background-color", "#32CD32"), $("#recordText_" + e).html("Accepted"), $.ajax({
                        type: "POST",
                        url: "/ajax/send_email_ajax.php",
                        data: {
                            user_id: s,
                            email_subject: "A rental request accept  notification",
                            email_message: "Congradulation, we accept your request"
                        },
                        success: function (e) {
                            if (1 == e.resultOK) {
                                return Swal.mixin({
                                    toast: !0,
                                    position: "top-end",
                                    showConfirmButton: !1,
                                    timer: 3e3
                                }).fire({type: "success", title: "Email notification has been sent successfully"}), !1
                            }
                        }
                    }), !1
                }
            })
        })
    }), $(document).on("click", ".car", function () {
        var e = $(this).attr("data-id").trim(), a = $(this).attr("data-action").trim();
        "delete" == a && Swal.fire({
            title: "Are you sure you want to delete record with id:" + e + "?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then(s => {
            s.value && $.ajax({
                type: "POST",
                url: "/ajax/car_ajax.php",
                data: {id: e, action: a},
                success: function (a) {
                    if (1 == a.resultOK) return $("#record_" + e).remove(), !1
                }
            })
        });
        var s = $("#make_id").val().trim(), r = $("#year").val().trim(), t = $("#plate_number").val().trim();
        if ($("#available").prop("checked")) var n = 1; else n = 0;
        if (pError = !1, "0" == s ? ($("#make_id_warning_message").html("[Make] should be selected"), $("#make_id_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#make_id_warning_message").switchClass("d-block", "d-none"), "" == r ? ($("#year_warning_message").html("[Year] should be filled"), $("#year_warning_message").switchClass("d-none", "d-block"), pError = !0) : r.length < 4 || r.length > 4 ? ($("#year_warning_message").html("[Year] should contain 4 digits"), $("#year_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#year_warning_message").switchClass("d-block", "d-none"), "" == t ? ($("#plate_number_warning_message").html("[Plate number] should be filled"), $("#plate_number_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#plate_number_warning_message").switchClass("d-block", "d-none"), 1 == pError) return !1;
        $.ajax({
            type: "POST",
            url: "/ajax/car_ajax.php",
            data: {id: e, action: a, make_id: s, year: r, plate_number: t, available: n},
            success: function (e) {
                1 == e.resultOK ? document.location.href = "/?page=car" : ($("#message").switchClass("d-none", "d-block"), $("#message").html(e.message))
            }
        })
    }), $(document).on("click", ".user", function () {
        var e = $(this).attr("data-id").trim(), s = $(this).attr("data-action").trim();
        "delete" == s && Swal.fire({
            title: "Are you sure you want to delete record with id:" + e + "?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then(a => {
            a.value && $.ajax({
                type: "POST",
                url: "/ajax/user_ajax.php",
                data: {id: e, action: s},
                success: function (a) {
                    if (1 == a.resultOK) return $("#record_" + e).remove(), !1
                }
            })
        });
        var r = $("#role_id").val().trim(), t = $("#fullname").val().trim(), n = $("#email").val().trim(),
            i = $("#password").val().trim();
        if ($("#activated").prop("checked")) var l = 1; else l = 0;
        if (pError = !1, "0" == r ? ($("#role_id_warning_message").html("[Role] should be selected"), $("#role_id_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#role_id_warning_message").switchClass("d-block", "d-none"), "" == t ? ($("#fullname_warning_message").html("[Fullname] should be filled"), $("#fullname_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#fullname_warning_message").switchClass("d-block", "d-none"), "" == n ? ($("#email_warning_message").html("The email field must be filled"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0) : a(n) ? $("#email_warning_message").switchClass("d-block", "d-none") : ($("#email_warning_message").html("The email field must be valid"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0), "" == i ? ($("#password_warning_message").html("[Password] should be filled"), $("#password_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#password_warning_message").switchClass("d-block", "d-none"), 1 == pError) return !1;
        $.ajax({
            type: "POST",
            url: "/ajax/user_ajax.php",
            data: {id: e, action: s, role_id: r, fullname: t, email: n, password: i, activated: l},
            success: function (e) {
                1 == e.resultOK ? document.location.href = "/?page=user" : ($("#message").switchClass("d-none", "d-block"), $("#message").html(e.message))
            }
        })
    }), $("#submit_feedback").click(function () {
        var e = $("#notes").val().trim();
        if (pError = !1, "" == e ? ($("#notes_warning_message").html("The Notes field must be filled"), $("#notes_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#notes_warning_message").switchClass("d-block", "d-none"), 1 == pError) return !1;
        $.ajax({
            type: "POST", url: "/ajax/customer_feedback_ajax.php", data: {notes: e}, success: function (e) {
                1 == e.resultOK ? ($("#notes").val(""), Swal.fire("Congradulations!", "You have just sent a feedback!", "success")) : ($("#message").switchClass("d-none", "d-block"), $("#message").html(e.message))
            }
        })
    }), $("#submit_rental_request").click(function () {
        var e = $("#datetimepicker1").val().trim(), a = $("#datetimepicker2").val().trim(),
            s = $("#car_id").val().trim(), r = $(this).attr("data-user-id").trim();
        if (pError = !1, "" == e ? ($("#datetimepicker1_warning_message").html("The from date field must be filled"), $("#datetimepicker1_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#datetimepicker1_warning_message").switchClass("d-block", "d-none"), "" == a ? ($("#datetimepicker2_warning_message").html("The Until date field must be filled"), $("#datetimepicker2_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#datetimepicker2_warning_message").switchClass("d-block", "d-none"), "0" == s ? ($("#car_id_warning_message").html("The car field must be selected"), $("#car_id_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#car_id_warning_message").switchClass("d-block", "d-none"), 1 == pError) return !1;
        $.ajax({
            type: "POST",
            url: "/ajax/customer_rent_a_car_ajax.php",
            data: {
                car_id: $("#car_id").val().trim(),
                from_date_time: $("#datetimepicker1").val().trim(),
                until_date_time: $("#datetimepicker2").val().trim()
            },
            success: function (e) {
                1 == e.resultOK ? ($("#datetimepicker1").val(""), $("#datetimepicker2").val(""), $("#car_id").val("0"), Swal.fire("Congradulations!", "You have just rent a car!", "success"), $.ajax({
                    type: "POST",
                    url: "/ajax/send_email_ajax.php",
                    data: {
                        user_id: r,
                        email_subject: "Rent a car notification",
                        email_message: "Thanks for your making a request. We will come back to you soon"
                    },
                    async: !0,
                    success: function (e) {
                        if (1 == e.resultOK) {
                            return Swal.mixin({
                                toast: !0,
                                position: "top-end",
                                showConfirmButton: !1,
                                timer: 3e3
                            }).fire({type: "success", title: "Email notification has been sent successfully"}), !1
                        }
                    }
                })) : ($("#message").switchClass("d-none", "d-block"), $("#message").html(e.message))
            }
        })
    }), $("#submit_recovery_password").click(function () {
        var e = $("#email").val().trim();
        if (pError = !1, "" == e ? ($("#email_warning_message").html("The email field must be filled"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0) : a(e) ? $("#email_warning_message").switchClass("d-block", "d-none") : ($("#email_warning_message").html("The email field must be valid"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0), 1 == pError) return !1;
        $("#message").switchClass("d-block", "d-none"), $.ajax({
            type: "POST",
            url: "/ajax/user_password_recovery_ajax.php",
            data: $(".recovery_password_form").serialize(),
            success: function (e) {
                1 == e.resultOK ? Swal.fire("Congradulations!", "Now you can check you email for a password", "success") : Swal.fire("Sorry!", "Something went wrong", "error")
            }
        })
    }), $("#submit_update_user_password").click(function () {
        var e = $("#old_password").val().trim(), a = $("#new_password").val().trim(),
            s = $("#retype_new_password").val().trim();
        if (pError = !1, "" == e ? ($("#old_password_warning_message").html("The old password field must be filled"), $("#old_password_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#old_password_warning_message").switchClass("d-block", "d-none"), 1 == pError) return !1;
        $.ajax({
            type: "POST",
            async: !1,
            url: "/ajax/user_check_old_password_to_update_ajax.php",
            data: $(".update_user_password_form").serialize(),
            success: function (e) {
                if (0 == e.resultOK) $("#message_password").switchClass("d-none", "d-block"), $("#message_password").html(e.message); else {
                    if ($("#message_password").switchClass("d-block", "d-none"), "" == a ? ($("#new_password_warning_message").html("The new password field must be filled"), $("#new_password_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#new_password_warning_message").switchClass("d-block", "d-none"), "" == s ? ($("#retype_new_password_warning_message").html("The retype new password field must be filled"), $("#retype_new_password_warning_message").switchClass("d-none", "d-block"), pError = !0) : a != s ? ($("#retype_new_password_warning_message").html("The retype new password field is not the same"), $("#retype_new_password_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#retype_new_password_warning_message").switchClass("d-block", "d-none"), 1 == pError) return !1;
                    $.ajax({
                        type: "POST",
                        url: "/ajax/user_password_update_ajax.php",
                        data: $(".update_user_password_form").serialize(),
                        success: function (e) {
                            1 == e.resultOK ? ($("#old_password").val(""), $("#new_password").val(""), $("#retype_new_password").val(""), Swal.fire("Congradulations!", "You have just updated your password!", "success")) : $("#message_password").switchClass("d-block", "d-none")
                        }
                    })
                }
            }
        })
    }), $("#submit_update_user_profile").click(function () {
        var e = $("#email").val().trim(), s = $("#fullname").val().trim();
        if (pError = !1, "" == s ? ($("#fullname_warning_message").html("The fullname field must be filled"), $("#fullname_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#fullname_warning_message").switchClass("d-block", "d-none"), "" == e ? ($("#email_warning_message").html("The email field must be filled"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0) : a(e) ? $("#email_warning_message").switchClass("d-block", "d-none") : ($("#email_warning_message").html("The email field must be valid"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0), 1 == pError) return !1;
        $.ajax({
            type: "POST",
            url: "/ajax/user_profile_update_ajax.php",
            data: $(".update_user_profile_form").serialize(),
            success: function (e) {
                1 == e.resultOK ? Swal.fire("Congradulations!", "You have just updated your profile!", "success") : ($("#message").switchClass("d-none", "d-block"), $("#message").html(e.message))
            }
        })
    }), $("#submit_register").click(function () {
        var e = $("#email").val().trim(), s = $("#fullname").val().trim(), r = $("#password").val().trim(),
            t = $("#retype_password").val().trim();
        if (pError = !1, "" == s ? ($("#fullname_warning_message").html("The fullname field must be filled"), $("#fullname_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#fullname_warning_message").switchClass("d-block", "d-none"), "" == e ? ($("#email_warning_message").html("The email field must be filled"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0) : a(e) ? $("#email_warning_message").switchClass("d-block", "d-none") : ($("#email_warning_message").html("The email field must be valid"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0), "" == r ? ($("#password_warning_message").html("The password field must be filled"), $("#password_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#password_warning_message").switchClass("d-block", "d-none"), "" == t ? ($("#retype_password_warning_message").html("The retype password field must be filled"), $("#retype_password_warning_message").switchClass("d-none", "d-block"), pError = !0) : r != t ? ($("#retype_password_warning_message").html("The retype password field is not the same"), $("#retype_password_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#retype_password_warning_message").switchClass("d-block", "d-none"), 1 == pError) return !1;
        $.ajax({
            type: "POST",
            url: "/ajax/user_create_ajax.php",
            data: $(".register_form").serialize(),
            success: function (e) {
                1 == e.resultOK ? document.location.href = "/?page=login" : ($("#message").switchClass("d-none", "d-block"), $("#message").html(e.message))
            }
        })
    }), $("#submit_login").click(function () {
        var e = $("#email").val().trim(), s = $("#password").val().trim();
        return pError = !1, "" == e ? ($("#email_warning_message").html("The email field must be filled"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0) : a(e) ? $("#email_warning_message").switchClass("d-block", "d-none") : ($("#email_warning_message").html("The email field must be valid"), $("#email_warning_message").switchClass("d-none", "d-block"), pError = !0), "" == s ? ($("#password_warning_message").html("The password field must be filled"), $("#password_warning_message").switchClass("d-none", "d-block"), pError = !0) : $("#password_warning_message").switchClass("d-block", "d-none"), 1 != pError && ($("#message").switchClass("d-block", "d-none"), "" == grecaptcha.getResponse() ? ($("#message").switchClass("d-none", "d-block"), $("#message").html("Robot verification failed, please try again"), !1) : void $.ajax({
            type: "POST",
            url: "/ajax/user_login_ajax.php",
            data: $(".login_form").serialize(),
            success: function (e) {
                1 == e.resultOK ? document.location.href = "/" : ($("#message").switchClass("d-none", "d-block"), $("#message").html(e.message))
            }
        }))
    })
});