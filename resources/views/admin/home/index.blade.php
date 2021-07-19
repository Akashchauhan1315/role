@extends('admin.layouts.app')
@section('title', __('messages.page_titles.HOME'))
@section('content')
            <div class="content-page">
                <div class="content">                    
                        <!-- Start Content-->
    <div class="container-fluid">
    
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <a href="{{ route('user.index')}}">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                    <i class="fe-users font-22 avatar-title text-success"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="mt-1"><span data-plugin="counterup">{{ $users}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Users</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </a>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <a href="{{ route('user.index')}}">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                    <i class="fe-users font-22 avatar-title text-primary"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="mt-1"><span data-plugin="counterup">{{ $url}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Urls</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </a>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

        </div>
       

        <div class="row">
            <div class="col-xl-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <div class="dropdown-menu dropdown-menu-right">
                           
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Recently Url's Reached</h4>

                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-nowrap table-centered m-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Url</th>
                                    <th>Reached</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($user as $userInfo)
                              <tr>
                                
                                <td>
                                  <h5 class="m-0 font-weight-normal">{{ $userInfo->url }}</h5>
                                </td>

                                    
                                    <td>
                                        {{ $userInfo->total }}
                                    </td>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
                    </div>
        <!-- end row -->
        
    </div> <!-- container -->
                </div>
                <!-- content -->

                <!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>document.write(new Date().getFullYear())</script> &copy; UserLog Powered by <a href="">UserLog</a> 
            </div>
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript:void(0);">About Us</a>
                    <a href="javascript:void(0);">Help</a>
                    <a href="javascript:void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->
            </div>
             @endsection

  