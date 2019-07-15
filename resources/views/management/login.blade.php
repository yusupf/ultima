<!DOCTYPE html>
<html>
    
<!-- Mirrored from admiria-laravel-vertical.ourdemo.website/pages-login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 04:54:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
<!-- Basic Css files -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="fixed-left">
        <!-- Loader -->
        <!-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->
         <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                    <!-- <h3 class="text-center m-0">
                        <a href="index-2.html" class="logo logo-admin"><img src="assets/images/logo.png" height="30" alt="logo"></a>
                    </h3> -->

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to Ultima.</p>
                        @if(session()->has('alert_danger'))
				<div class="alert alert-danger">
					{{ session()->get('alert_danger') }}
				</div>
			@endif
			@if(session()->has('alert_success'))
				<div class="alert alert-success">
					{{ session()->get('alert_success') }}
				</div>
			@endif

                        <form class="form-horizontal m-t-30" method="POST" action="{{ url('/login_admin') }}">
                       {{ csrf_field()}}

                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" name="user_email" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="user_pass" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock    "></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">© 2019 Ultima. Crafted with <i class="mdi mdi-heart text-danger"></i> by IsysEdge</p>
            </div>

        </div>
        <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

 

 <!-- App js -->
 <script src="assets/js/app.js"></script>
 
    
    </body>
</html>
