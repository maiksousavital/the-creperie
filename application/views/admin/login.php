

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/admin/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/responsive.css">
    
</head>

<body class="bg-dark">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    
    <div class="container-fluid">
        <br class="md-4">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3 style="color: #fff">LOGIN</h3>                    
                </div>
                <div id="login_error_message" class="alert alert-danger mt-1 hide"></div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form  id="FormLogin" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username"  value="" name="username" id="username" class="form-control">
                                <div id="username_warning_message" class="alert alert-warning mt-1 hide"></div>

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******"  value="" name="password" id="password" class="form-control">
                                <div id="password_warning_message" class="alert alert-warning mt-1 hide"></div>

                            </div>

                            <button id="btn_login" type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                            
                        </form> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p style="color: #fff">Copyright &copy; 2019 <a href="#">The Creperie</a> All rights reserved.</p>
            </div>
        </div>
    </div>

    
    <script src="<?php echo base_url(); ?>assets/admin/js/vendor/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>    
    <script src="<?php echo base_url(); ?>assets/admin/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/icheck/icheck-active.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/validateLogin.js"></script>


</body>

</html>