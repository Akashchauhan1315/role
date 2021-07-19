        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <!-- <img src="https://mp2r.royoconsult.com/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle"> -->
                    <span class="pro-user-name ml-1">
                        Admin <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>
    
                    
    
                    <div class="dropdown-divider"></div>
    
                    <!-- item-->
                    
                    <a class="dropdown-item notify-item"

                        href="{{ route('admin.logout')}}"
                    >
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                
                    </a>

                <form id="logout-form" action="https://mp2r.royoconsult.com/logout" method="POST" >
                    <input type="hidden" name="_token" value="UGriJnq1i5WSdXGupCg3N8lY05ReEfNLeQpjx2bI">                </form>
    
                </div>
            </li>
    
           <!--  <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li> -->
    
        </ul>
    
        <!-- LOGO -->
        <div class="logo-box">
            <a href="" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="https://mp2r.royoconsult.com/assets/images/logo-sm.png"alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="https://mp2r.royoconsult.com/assets/images/logo-dark.png" alt="" height="20">
                </span>
            </a>
    
            <a href="" class="logo logo-light text-center">
                                                <span class="logo-sm">
                    <img src="{{ asset('/web/images/logo-header.png') }}" alt="" height="32">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('/web/images/logo-header.png') }}"alt="" height="64">
                </span>
                            </a>
        </div>
    
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>   
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end Topbar
                            <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="https://mp2r.royoconsult.com/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('admin.logout')}}" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
          @include('admin.includes.side_bar')
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>