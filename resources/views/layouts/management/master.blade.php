<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Ultima - dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- C3 charts css -->
    <link href="{{ url('') }}/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />
    <!-- Basic Css files -->
    <link href="{{ url('') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ url('') }}/assets/css/style.css" rel="stylesheet" type="text/css">
    <style>
    .card-header{
        background: #fff;
        padding: 15px 0px;
    }
    </style>
    @yield('style')
</head>
<body class="fixed-left">
    <!-- Loader -->
    <!-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        
        @include('layouts.management.sidebar')
        <!-- Left Sidebar End -->
        <!-- Start right Content here -->
        <div class="content-page">
            <div class="content">
                @include('layouts.management.header')
                <!-- Start content -->
                
                @yield('content')
            </div>
            
            <footer class="footer">
                ©  2018 - 2019 Admiria <span class="text-muted hidden-xs-down pull-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
            </footer>  
        </div>
    </div>
    <script src="{{ url('') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('') }}/assets/js/modernizr.min.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ url('') }}/assets/js/waves.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.scrollTo.min.js"></script>
    
   
    
    <!-- App js -->
    <script src="{{ url('') }}/assets/js/app.js"></script>
    @yield('script')
</body>
</html>