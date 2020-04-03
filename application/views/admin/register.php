
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><span class="bread-blod">Register</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="register_success_message" class="alert alert-success mt-1 hide container-fluid all-content-wrapper"></div>
    <div id="register_error_message" class="alert alert-danger mt-1 hide container-fluid all-content-wrapper"></div>

    <div class="product-status mg-tb-15">
        <div class="container-fluid all-content-wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="product-status-wrap">
                        <h4>Register</h4>
                        <br class="mb-4">



                        <form method="post" enctype='multipart/form-data' id="formRegister">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input id="email" name="email" type="email" class="form-control">
                                    <div id="register_email_warning_message" class="alert alert-warning mt-1 hide"></div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input id="password" name="password" type="password" class="form-control">
                                    <div id="register_password_warning_message" class="alert alert-warning mt-1 hide"></div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>First Name</label>
                                    <input type="text" id="firstName" name="firstName" class="form-control">
                                    <div id="register_firstName_warning_message" class="alert alert-warning mt-1 hide"></div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Last Name</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control">
                                    <div id="register_lastName_warning_message" class="alert alert-warning mt-1 hide"></div>
                                </div>

                            </div>
                            <div class="text-center">
                                <button id="btn_add_new_user" class="btn btn-success loginbtn">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>