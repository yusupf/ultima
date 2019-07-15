<div class="topbar">

<nav class="navbar-custom">
   
    <ul class="list-inline float-right mb-0">
      
        <!-- Fullscreen -->
        <li class="list-inline-item dropdown notification-list hidden-xs-down">
            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                <i class="mdi mdi-fullscreen noti-icon"></i>
            </a>
        </li>
        <!-- language-->
        <li class="list-inline-item dropdown notification-list hidden-xs-down">
            <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                English <img src="{{ url('') }}/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
            </a>
            <div class="dropdown-menu dropdown-menu-right language-switch">
                <a class="dropdown-item" href="#"><img src="{{ url('') }}/assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
                <a class="dropdown-item" href="#"><img src="{{ url('') }}/assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                <a class="dropdown-item" href="#"><img src="{{ url('') }}/assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                <a class="dropdown-item" href="#"><img src="{{ url('') }}/assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                <a class="dropdown-item" href="#"><img src="{{ url('') }}/assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
            </div>
        </li>
        <!-- User-->
        <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                <img src="{{ url('') }}/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                <!-- <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a> -->
                <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted"></i> Settings</a>
                <!-- <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('logout_admin') }}"><i class="dripicons-exit text-muted"></i> Logout</a>
            </div>
        </li>
    </ul>
    <!-- Page title -->
    <ul class="list-inline menu-left mb-0">
        <li class="list-inline-item">
            <button type="button" class="button-menu-mobile open-left waves-effect">
                <i class="ion-navicon"></i>
            </button>
        </li>
        <li class="hide-phone list-inline-item app-search">
            <h3 class="page-title">Dashboard</h1>
 
        </li>
    </ul>
    <div class="clearfix"></div>
</nav>
</div>