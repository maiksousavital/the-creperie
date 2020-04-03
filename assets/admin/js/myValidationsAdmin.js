$(document).ready(function () {

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        return re.test(String(email).toLowerCase());
    }

    $(document).on('click', '#btnDeleteMenuItem', function (e) {
        var id = ($('td:first', $(this).parents('tr')).text());
        deleteMenuItem(id);
        e.preventDefault();
    })

    function deleteMenuItem(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "Menu/deleteMenuItem",
                    method: "GET",
                    data: {id: id},

                    success: function (data) {

                        Swal.fire(
                            'Deleted !',
                            'Your file has been deleted.',
                            'success'
                        )

                        show_product();
                    }
                })
            }
        })
    }


    show_product(); //call function show all menu items


    //function show all menu items
    function show_product() {

        $.ajax({
            type: 'ajax',
            url: 'menu/product_data',
            async: true,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                        '<td hidden>' + data[i].id + '</td>' +
                        '<td><img src="../assets/admin/img/menu/' + data[i].picture + '" alt=""></td>' +
                        '<td>' + data[i].title + '</td>' +
                        '<td>' + data[i].description + '</td>' +
                        '<td>' + data[i].price + '</td>' +
                        '<td>' + data[i].large_price + '</td>' +
                        '<td>' + data[i].ingredients + '</td>' +
                        '<td style="text-align:center; width: 100px;">' +
                        '<a href="javascript:void(0);" class="btn btn-warning fa fa-pencil-square-o item_edit" data-product_id="' + data[i].id + '" data-product_title="' + data[i].title + '" data-product_description="' + data[i].description + '" data-product_image="' + data[i].picture + '"  data-product_price="' + data[i].price + '" data-product_large_price="' + data[i].price + '" data-product_size="' + data[i].size + '" data-product_category="' + data[i].category + '" data-product_ingredients="' + data[i].ingredients + '"></a>' + ' ' +
                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash-o" id="btnDeleteMenuItem" data-product_code="' + data[i].id + '"></a>' +
                        '</td>' +
                        '</tr>';


                }
                $('#show_data').html(html);
                $('#mydata').dataTable({
                    "bFilter": true,
                    retrieve: true,
                });
            }

        });

    }


    //update record to database
    $('#btn_update').on('click', function () {


        var myForm = document.getElementById('formUpdateItem');
        var formData = new FormData(myForm);

        var title = myForm.product_title.value;
        var description = myForm.product_description.value;
        var picture = myForm.product_picture.value;
        var price = myForm.product_price.value;
        var large_price = myForm.product_large_price.value;
        var category = myForm.product_category.value;
        var ingredients = myForm.product_ingredients.value;


        pError = false;

        if (title == "") {
            $('#upd_title_warning_message').html('The field title must be filled');
            $("#upd_title_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#upd_title_warning_message").switchClass("show", "hide");

        }

        if (description == "") {
            $('#upd_description_warning_message').html('The field description must be filled.');
            $("#upd_description_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#upd_description_warning_message").switchClass("show", "hide");

        }

        if (picture == "") {
            $('#upd_picture_warning_message').html('You must choose a piture.');
            $("#upd_picture_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#upd_picture_warning_message").switchClass("show", "hide");
        }

        if (price == "") {
            $('#upd_price_warning_message').html('The field price must be filled.');
            $("#upd_price_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#upd_price_warning_message").switchClass("show", "hide");

        }

        if (category == "") {
            $('#upd_category_warning_message').html('You must seclect a category.');
            $("#upd_category_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#upd_category_warning_message").switchClass("show", "hide");

        }

        if (pError == true) {
            return false;
        }

        $.ajax({
            type: "POST",
            url: 'menu/update',
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="id"]').val("");
                $('[name="title"]').val("");
                $('[name="description"]').val("");
                $('[name="image"]').val("");
                $('[name="price"]').val("");
                $('[name="large_price"]').val("");
                $('[name="category"]').val("");
                $('[name="ingredients"]').val("");
                $('#Modal_Edit').modal('hide');
                show_product();
                $('#item_success_message').html('Item updated successfully!');
                $("#item_success_message").switchClass("hide", "show");

                show_product();

            }, error: function (data) {
                $('#item_error_message').html('Some error occurred!');
                $("#item_error_message").switchClass("hide", "show");


            }
        });
        return false;
    });

    //Save product
    $('#btn_save').on('click', function () {

        var myForm = document.getElementById('formAddItem');
        var formData = new FormData(myForm);


        var title = myForm.title.value;
        var description = myForm.description.value;
        var picture = myForm.picture.value;
        var price = myForm.price.value;
        var large_price = myForm.large_price.value;
        var category = myForm.category.value;
        var ingredients = myForm.ingredients.value;

        pError = false;

        if (title == "") {
            $('#title_warning_message').html('The field title must be filled');
            $("#title_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#title_warning_message").switchClass("show", "hide");

        }

        if (description == "") {
            $('#description_warning_message').html('The field description must be filled.');
            $("#description_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#description_warning_message").switchClass("show", "hide");

        }

        if (picture == "") {
            $('#picture_warning_message').html('You must choose a piture.');
            $("#picture_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#picture_warning_message").switchClass("show", "hide");

        }

        if (price == "") {
            $('#price_warning_message').html('The field price must be filled.');
            $("#price_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#price_warning_message").switchClass("show", "hide");

        }

        if (category == "") {
            $('#category_warning_message').html('You must seclect a category.');
            $("#category_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#category_warning_message").switchClass("show", "hide");

        }

        if (pError == true) {
            return false;
        }

        $.ajax({
            type: "POST",
            url: 'menu/save',
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="id"]').val("");
                $('[name="title"]').val("");
                $('[name="description"]').val("");
                $('[name="image"]').val("");
                $('[name="price"]').val("");
                $('[name="large_price"]').val("");
                $('[name="category"]').val("");
                $('[name="ingredients"]').val("");
                $('#Modal_Add').modal('hide');

                $('#item_success_message').html('Item added successfully!');
                $("#item_success_message").switchClass("hide", "show");

                show_product();

            }, error: function (data) {
                $('#item_error_message').html('Some error occurred!');
                $("#item_error_message").switchClass("hide", "show");


            }
        });
        return false;
    });


    //get data for update record
    $('#show_data').on('click', '.item_edit', function () {


        var id = $(this).data('product_id');
        var title = $(this).data('product_title');
        var description = $(this).data('product_description');
        var image = $(this).data('product_image');
        var price = $(this).data('product_price');
        var size = $(this).data('product_size');
        var category = $(this).data('product_category');
        var ingredients = $(this).data('product_ingredients');


        $('#Modal_Edit').modal('show');
        $('[name="product_id"]').val(id);
        $('[name="product_title"]').val(title);
        $('[name="product_description"]').val(description);
        $('[name="product_image"]').val(image);
        $('[name="product_price"]').val(price);
        $('[name="product_size"]').val(size);
        $('[name="product_category"]').val(category);
        $('[name="product_ingredients"]').val(ingredients);
    });


    //################ REVIEW ##########################//


    $('#show_reviews').on('click', '.item_edit', function () {


        var id = $(this).data('review_id');
        var name = $(this).data('review_name');
        var email = $(this).data('review_email');
        var review = $(this).data('review_message');
        var rating = $(this).data('review_rating');

        $('#exampleModal').modal('show');
        $('[name="review_id"]').val(id);
        $('[name="review_name"]').val(name);
        $('[name="review_email"]').val(email);
        $('[name="review_message"]').val(review);
        $('[name="review_rating"]').val(rating);

    });

    show_reviews();

    function show_reviews() {
        $.ajax({
            type: 'ajax',
            url: 'review/review_data',
            async: true,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var div = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    if (data[i].status == 1) {
                        div = '<td><div align="center" class="alert alert-success">\n' +
                            '<strong>Approved</strong> ' +
                            '</div></td>'
                    } else {
                        div = '<td><div align="center" class="alert alert-danger">\n' +
                            '<strong>Not Approved</strong> ' +
                            '</div></td>'
                    }
                    html += '<tr>' +
                        '<td hidden>' + data[i].id + '</td>' +
                        '<td><img src="../assets/site/images/' + data[i].avatar + '" alt=""></td>' +
                        '<td>' + data[i].name + '</td>' +
                        '<td>' + data[i].email + '</td>' +
                        '<td>' + data[i].review + '</td>' +
                        '<td>' + data[i].rating + '</td>' +
                        div +
                        '<td style="text-align:center;width: 100px;">' +
                        '<a href="javascript:void(0);" class="btn btn-info fa fa-search item_edit" id="btn_read_review" data-review_id="' + data[i].id + '" data-review_name="' + data[i].name + '" data-review_email="' + data[i].email + '" data-review_message="' + data[i].review + '" data-review_rating="' + data[i].rating + '"></a>' + ' ' +
                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash-o" id="btn_delete_review" data-review_id="' + data[i].id + '"></a>' +
                        '</td>' +
                        '</tr>';


                }
                $('#show_reviews').html(html);
                $('#tableReview').dataTable({
                    "bFilter": false,
                    retrieve: true,
                });
            }

        });

    }

    $(document).on('click', '#btn_approve', function (e) {
        var id = $('[name="review_id"]').val();
        approve_review(id);
        e.preventDefault();
    })

    function approve_review(id) {
        Swal.fire({
            title: 'Do you want to approve this review?',
            text: "This review will be displayed on your website.",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, approve it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "review/approve_review",
                    method: "GET",
                    data: {id: id},

                    success: function (data) {

                        Swal.fire(
                            'Approved !',
                            'Review has been approved.',
                            'success'
                        )
                        show_reviews();
                        $('#exampleModal').modal('hide');
                    }
                })
            }
        })
    }

    $(document).on('click', '#btn_delete_review', function (e) {
        var id = ($('td:first', $(this).parents('tr')).text());
        delete_review(id);
        e.preventDefault();
    })

    function delete_review(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "review/delete_review",
                    method: "GET",
                    data: {id: id},
                    success: function (data) {

                        Swal.fire(
                            'Deleted !',
                            'Item has been deleted.',
                            'success'
                        )

                        show_reviews();

                    }
                })
            }
        })
    }

    //################ END REVIEW ##########################//


    //################ CONTACT ##########################//

    // Show a message of a specific line in the table in a modal form
    $('#show_messages').on('click', '.item_edit', function () {


        var id = $(this).data('contact_id');
        var name = $(this).data('contact_name');
        var email = $(this).data('contact_email');
        var subject = $(this).data('contact_subject');
        var message = $(this).data('contact_message');

        $('#exampleModal').modal('show');
        $('[name="contact_id"]').val(id);
        $('[name="contact_name"]').val(name);
        $('[name="contact_email"]').val(email);
        $('[name="contact_subject"]').val(subject);
        $('[name="contact_message"]').val(message);

    });

    show_messages();

    function show_messages() {
        $.ajax({
            type: 'ajax',
            url: 'contact/contact_data',
            async: true,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                var div = '';

                for (i = 0; i < data.length; i++) {
                    if (data[i].status == 1) {
                        div = '<td><div align="center" class="alert alert-success">\n' +
                            '<strong>Read</strong> ' +
                            '</div></td>'
                    } else {
                        div = '<td><div align="center" class="alert alert-danger">\n' +
                            '<strong>Unread</strong> ' +
                            '</div></td>'
                    }
                    html += '<tr>' +
                        '<td hidden>' + data[i].id + '</td>' +
                        '<td>' + data[i].name + '</td>' +
                        '<td>' + data[i].email + '</td>' +
                        '<td>' + data[i].subject + '</td>' +
                        '<td>' + data[i].message + '</td>' +
                        div +
                        '<td style="text-align:center;width: 100px;">' +
                        '<a href="javascript:void(0);" class="btn btn-info fa fa-search item_edit" id="" data-contact_id="' + data[i].id + '" data-contact_name="' + data[i].name + '" data-contact_email="' + data[i].email + '" data-contact_subject="' + data[i].subject + '" data-contact_message="' + data[i].message + '"></a>' + ' ' +
                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash-o" id="btn_delete_message" data-contact_id="' + data[i].id + '"></a>' +
                        '</td>' +
                        '</tr>';


                }
                $('#show_messages').html(html);
                $('#tableContact').dataTable({
                    "bFilter": false,
                    retrieve: true,
                });
            }

        });

    }

    $(document).on('click', '#btn_read_message', function (e) {

        var id = $('[name="contact_id"]').val();

        Swal.fire({
            title: 'Do you want to mark this message as read?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, mark it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "contact/mark_message_read",
                    method: "GET",
                    data: {id: id},

                    success: function (data) {

                        Swal.fire(
                            'Success !',
                            'This message was marked as read.',
                            'success'
                        )

                        show_messages();
                        $('#exampleModal').modal('hide');
                    }
                })
            }
        })
    });

    $(document).on('click', '#btn_delete_message', function (e) {
        var id = ($('td:first', $(this).parents('tr')).text());
        delete_message(id);
        e.preventDefault();
    })

    function delete_message(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "contact/delete_message",
                    method: "GET",
                    data: {id: id},

                    success: function (data) {

                        Swal.fire(
                            'Deleted !',
                            'Message has been deleted.',
                            'success'
                        )

                        show_messages();
                    }
                })
            }
        })
    }


    //################ END CONTACT ##########################//


//############# HOME VIDEO ################//

    show_home();

    function show_home() {
        $.ajax({
            type: 'ajax',
            url: 'HomeVideo/home_data',
            async: true,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                        '<td hidden>' + data[i].id + '</td>' +
                        '<td><video autoplay muted loop  src="../assets/admin/img/home/' + data[i].video + '" alt="" style="width:200px" /></td>' +
                        '<td style="text-align:center; width: 50px;">' +
                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash-o" id="btn_delete_home" data-home_id="' + data[i].id + '"></a>' +
                        '</td>' +
                        '</tr>';


                }
                $('#show_home').html(html);
                $('#tableHome').dataTable({
                    "bFilter": false,
                    retrieve: true,

                });
            }

        });

    }


    $('#btn_save_video').on('click', function () {

        var myForm = document.getElementById('formHome');
        var formData = new FormData(myForm);

        var video = myForm.video.value;

        pError = false;

        if (video == "") {
            $('#video_home_warning_message').html('You must choose a video.');
            $("#video_home_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#video_home_warning_message").switchClass("show", "hide");

        }


        if (pError == true) {
            return false;
        }

        $.ajax({
            type: "POST",
            url: 'homevideo/upload_video_home',
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {

                $('[name="video"]').val("");
                $('#Modal_Add').modal('hide');
                $('#home_success_message').html('Video uploaded successfully!');
                $("#home_success_message").switchClass("hide", "show");
                show_home();
            }, error: function (data) {
                $('#home_error_message').html('Some error occurred!');
                $("#home_error_message").switchClass("hide", "show");


            }
        });
        return false;
    });

    $(document).on('click', '#btn_delete_home', function (e) {
        var id = ($('td:first', $(this).parents('tr')).text());
        delete_home_video(id);
        e.preventDefault();
    })

    function delete_home_video(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "homevideo/delete_home_video",
                    method: "GET",
                    data: {id: id},
                    success: function (data) {

                        Swal.fire(
                            'Deleted !',
                            'Item has been deleted.',
                            'success'
                        )

                        show_home();
                    }
                })
            }
        })
    }

    //############## END HOME VIDEO #############//

    //#################### ABOUT ###########################//
    $('#btn_save_about').on('click', function () {

        var myForm = document.getElementById('formAbout');
        var formData = new FormData(myForm);

        var picture = myForm.picture_1.value;
        var picture2 = myForm.picture_2.value;
        var about = myForm.about.value;

        pError = false;

        if (picture == "") {
            $('#picture_warning_message').html('You must choose a picture.');
            $("#picture_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#picture_warning_message").switchClass("show", "hide");

        }

        if (picture2 == "") {
            $('#picture2_warning_message').html('You must choose a picture.');
            $("#picture2_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#picture2_warning_message").switchClass("show", "hide");

        }

        if (about == "") {
            $('#about_text_warning_message').html('The field about must be filled');
            $("#about_text_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#about_text_warning_message").switchClass("show", "hide");

        }

        if (pError == true) {
            return false;
        }


        $.ajax({
            type: "POST",
            url: 'about/save_about',
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="about"]').val("");
                $('[name="files[]"]').val("");
                $('#Modal_Add').modal('hide');
                $('#about_success_message').html('Item added successfully!');
                $("#about_success_message").switchClass("hide", "show");
                show_about();

            }, error: function (data) {
                $('#about_error_message').html('Some error occurred!');
                $("#about_error_message").switchClass("hide", "show");


            }
        });
        return false;
    });

    show_about();

    function show_about() {
        $.ajax({
            type: 'ajax',
            url: 'about/about_data',
            async: true,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                        '<td hidden>' + data[i].id + '</td>' +
                        '<td><img src="../assets/admin/img/about/' + data[i].picture + '" alt=""></td>' +
                        '<td><img src="../assets/admin/img/about/' + data[i].picture_2 + '" alt=""></td>' +
                        '<td>' + data[i].about + '</td>' +
                        '<td style="text-align:center; width: 100px;">' +
                        '<a href="javascript:void(0);" class="btn btn-warning fa fa-pencil-square-o item_edit" data-about_id="' + data[i].id + '" data-about_picture="' + data[i].picture + '" data-about_about="' + data[i].about + '" ></a>' + ' ' +
                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash-o" id="btn_delete_about" data-about_id="' + data[i].id + '"></a>' +
                        '</td>' +
                        '</tr>';


                }
                $('#show_about').html(html);
                $('#tableAbout').dataTable({
                    "bFilter": false,
                    retrieve: true,

                });
            }

        });

    }

    //update record to database
    $('#btn_update_about').on('click', function () {


        var myForm = document.getElementById('formUpdateAbout');
        var formData = new FormData(myForm);

        var id = myForm.about_id.value;
        var picture = myForm.picture_1.value;
        var picture2 = myForm.picture_2.value;
        var about = myForm.about_about.value;

        pError = false;

        if (picture == "") {
            $('#upd_about_picture_warning_message').html('You must choose a piture.');
            $("#upd_about_picture_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#upd_about_picture_warning_message").switchClass("show", "hide");
        }

        if (picture2 == "") {
            $('#upd_about_picture2_warning_message').html('You must choose a picture.');
            $("#upd_about_picture2_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#upd_about_picture2_warning_message").switchClass("show", "hide");

        }

        if (about == "") {
            $('#upd_about_warning_message').html('The field about must be filled.');
            $("#upd_about_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#upd_about_warning_message").switchClass("show", "hide");

        }


        if (pError == true) {
            return false;
        }

        $.ajax({

            type: "POST",
            url: 'about/update_about',
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="id"]').val("");
                $('[name="picture_1"]').val("");
                $('[name="picture_2"]').val("");
                $('[name="about_about"]').val("");
                $('#Modal_Edit').modal('hide');
                show_about();
                $('#item_success_message').html('Item updated successfully!');
                $("#item_success_message").switchClass("hide", "show");

                show_about();

            }, error: function (data) {
                $('#item_error_message').html('Some error occurred!');
                $("#item_error_message").switchClass("hide", "show");


            }
        });

        return false;
    });

    //get data for update record
    $('#show_about').on('click', '.item_edit', function () {

        var id = $(this).data('about_id');
        var picture = $(this).data('about_picture');
        var about = $(this).data('about_about');


        $('#Modal_Edit').modal('show');
        $('[name="about_id"]').val(id);
        //$('[name="about_picture"]').val(title);
        $('[name="about_about"]').val(about);

    });

    $(document).on('click', '#btn_delete_about', function (e) {
        var id = ($('td:first', $(this).parents('tr')).text());
        delete_about(id);
        e.preventDefault();
    })

    function delete_about(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "about/delete_about",
                    method: "GET",
                    data: {id: id},
                    success: function (data) {

                        Swal.fire(
                            'Deleted !',
                            'Item has been deleted.',
                            'success'
                        )

                        show_about();
                    }
                })
            }
        })
    }

    //######################### END ABOUT ############################//

    //######################### BOOKING ########################//
    show_bookings();

    function show_bookings() {
        $.ajax({
            type: 'ajax',
            url: 'booking/booking_data',
            async: true,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                var div = '';

                for (i = 0; i < data.length; i++) {
                    if (data[i].confirmed == 1) {
                        div = '<td><div align="center" class="alert alert-success">\n' +
                            '<strong>Yes</strong> ' +
                            '</div></td>'
                    } else {
                        div = '<td><div align="center" class="alert alert-danger">\n' +
                            '<strong>No</strong> ' +
                            '</div></td>'
                    }
                    html += '<tr>' +
                        '<td hidden>' + data[i].id + '</td>' +
                        '<td>' + data[i].name + '</td>' +
                        '<td>' + data[i].email + '</td>' +
                        '<td>' + data[i].phone + '</td>' +
                        '<td>' + data[i].date + '</td>' +
                        '<td>' + data[i].time + '</td>' +
                        '<td>' + data[i].num_people + '</td>' +
                         div +
                        '<td style="text-align:center;width: 100px;">' +
                        '<a href="javascript:void(0);" class="btn btn-warning fa fa-pencil-square-o" id="btn_confirm_booking" data-booking_id="' + data[i].id + '"></a>' + ' ' +

                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash-o" id="btn_delete_booking" data-booking_id="' + data[i].id + '"></a>' +
                        '</td>' +
                        '</tr>';


                }
                $('#show_bookings').html(html);
                $('#tableBooking').dataTable({
                    "bFilter": false,
                    retrieve: true,
                    dom: 'Bfrtip',
                    responsive: true,
                    buttons: [
                        'copy',
                        {
                            extend: 'excelHtml5',
                            title: 'Bookings'
                        },
                        {
                            extend: 'pdfHtml5',
                            title: 'Bookings'
                        },
                        'print'
                    ]
                });
            }

        });

    }

    $(document).on('click', '#btn_confirm_booking', function (e) {
        var id = ($('td:first', $(this).parents('tr')).text());

        confirm_booking(id);
        e.preventDefault();
    })

    function confirm_booking(id) {
        Swal.fire({
            title: 'Do you want to approve this booking?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, approve it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "booking/confirm_booking",
                    method: "GET",
                    data: {id: id},

                    success: function (data) {

                        Swal.fire(
                            'Approved !',
                            'This booking has been approved.',
                            'success'
                        )

                        show_bookings();
                    }
                })
            }
        })
    }

    $(document).on('click', '#btn_delete_booking', function (e) {
        var id = ($('td:first', $(this).parents('tr')).text());
        delete_booking(id);
        e.preventDefault();
    })

    function delete_booking(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "booking/delete_booking",
                    method: "GET",
                    data: {id: id},
                    success: function (data) {

                        Swal.fire(
                            'Deleted !',
                            'Item has been deleted.',
                            'success'
                        )

                        show_bookings();
                    }
                })
            }
        })
    }


    //######################### BOOKING ########################//

    //############### GALLERY ##############//

    show_gallery_pictures();

    //function show all gallery pictures
    function show_gallery_pictures() {

        $.ajax({
            type: 'ajax',
            url: 'gallery/load_gallery_pictures',
            async: true,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                        '<td hidden>' + data[i].id + '</td>' +
                        '<td><img src="../assets/admin/img/gallery/' + data[i].picture + '" alt=""></td>' +
                        '<td>' + data[i].title + '</td>' +
                        '<td style="text-align:center;width: 100px;">' +
                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash-o" id="btn_delete_picture" data-picture_code="' + data[i].id + '"></a>' +
                        '</td>' +
                        '</tr>';


                }

                $('#show_gallery').html(html);
                $('#gallery_pictures').dataTable({
                    "bFilter": false,
                    retrieve: true,

                });
            }

        });

    }

    //Save gallery picture
    $('#btn_save_picture_gallery').on('click', function () {

        var myForm = document.getElementById('formAddPicGallery');
        var formData = new FormData(myForm);


        var title = myForm.title.value;
        var picture = myForm.picture.value;


        pError = false;

        if (title == "") {
            $('#title_warning_message').html('The field title must be filled');
            $("#title_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#title_warning_message").switchClass("show", "hide");

        }

        if (picture == "") {
            $('#picture_warning_message').html('You must choose a piture.');
            $("#picture_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#picture_warning_message").switchClass("show", "hide");

        }

        if (pError == true) {
            return false;
        }

        $.ajax({
            type: "POST",
            url: 'gallery/save_picture',
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="id"]').val("");
                $('[name="title"]').val("");
                $('[name="image"]').val("");
                $('#Modal_Add').modal('hide');

                $('#item_success_message').html('Item added successfully!');
                $("#item_success_message").switchClass("hide", "show");

                show_gallery_pictures();

            }, error: function (data) {
                $('#item_error_message').html('Some error occurred!');
                $("#item_error_message").switchClass("hide", "show");


            }
        });
        return false;
    });

    $(document).on('click', '#btn_delete_picture', function (e) {
        var id = ($('td:first', $(this).parents('tr')).text());
        delete_picture_gallery(id);
        e.preventDefault();
    })

    function delete_picture_gallery(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "gallery/delete_picture",
                    method: "GET",
                    data: {id: id},
                    success: function (data) {

                        Swal.fire(
                            'Deleted !',
                            'Item has been deleted.',
                            'success'
                        )

                        show_gallery_pictures();
                    }
                })
            }
        })
    }


//############ NEWSLETTER #############//
    show_newsletter_emails();
    function show_newsletter_emails() {
        $.ajax({
            type: 'ajax',
            url: 'newsletter/newsletter_data',
            async: true,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +

                        '<td>' +  data[i].email +  '</td>' +
                        '<td style="text-align:center; width: 20px;">' +
                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash-o" id="btn_delete_email" data-newsletter_id="' + data[i].email + '"></a>' +
                        '</td>' +
                        '</tr>';


                }
                $('#show_emails').html(html);
                $('#tableNewsletter').dataTable({
                    "bFilter": false,
                    retrieve: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'copy',
                        {
                            extend: 'excelHtml5',
                            title: 'Newsletter'
                        }

                    ]

                });
            }

        });

    }

    $(document).on('click', '#btn_delete_email', function (e) {
        var email = ($('td:first', $(this).parents('tr')).text());

        delete_email(email);
        e.preventDefault();
    })

    function delete_email(email) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "newsletter/delete_email",
                    method: "GET",
                    data: {email: email},
                    success: function (data) {

                        Swal.fire(
                            'Deleted !',
                            'Item has been deleted.',
                            'success'
                        )

                        show_newsletter_emails();

                    }
                })
            }
        })
    }

//############ END NEWSLETTER #############//

//################ REGISTER ##############//
    $('#btn_add_new_user').on('click', function () {

        var myForm = document.getElementById('formRegister');
        var formData = new FormData(myForm);


        var email = myForm.email.value;
        var password = myForm.password.value;
        var firstName = myForm.firstName.value;
        var lastName = myForm.lastName.value;

        pError = false;


        if (email == "") {
            $('#register_email_warning_message').html('The field email must be filled');
            $("#register_email_warning_message").switchClass("hide", "show");
            pError = true;

        } else {
            if (validateEmail(email)) {
                $("#register_email_warning_message").switchClass("show", "hide");
            } else {
                $('#register_email_warning_message').html('Email is not valid.');
                $("#register_email_warning_message").switchClass("hide", "show");
                pError = true;

            }
        }

        if (password == "") {
            $('#register_password_warning_message').html('The field password must be filled');
            $("#register_password_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#register_password_warning_message").switchClass("show", "hide");

        }

        if (firstName == "") {
            $('#register_firstName_warning_message').html('The field first name must be filled');
            $("#register_firstName_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#register_firstName_warning_message").switchClass("show", "hide");

        }

        if (lastName == "") {
            $('#register_lastName_warning_message').html('The field last name must be filled');
            $("#register_lastName_warning_message").switchClass("hide", "show");
            pError = true;
        } else {
            $("#register_lastName_warning_message").switchClass("show", "hide");

        }


        if (pError == true) {
            return false;
        }

        $.ajax({
            type: "POST",
            url: "register/save_new_user",
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $('[name="email"]').val("");
                $('[name="password"]').val("");
                $('[name="firstName"]').val("");
                $('[name="lastName"]').val("");


                $('#register_success_message').html('New user registered successfully.');
                $("#register_success_message").switchClass("hide", "show");
                //send_sms();
                //send_email();

            }, error: function (data) {
                $('#register_error_message').html('Some error occurred!');
                $("#register_error_message").switchClass("hide", "show");
            }
        });

        return false;
    });
//################ END REGISTER ##############//


});


