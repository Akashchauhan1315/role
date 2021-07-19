@extends('admin.layouts.app')
@section('title', __('users'))
@section('content')
    <div class="content-page">
        @include('sweetalert::alert')
        <div class="content">                            
            <div class="row">
                <div class="col-md-4">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        <li class="nav-item"></li>
                      </ul>
                    </div><!-- /.card-header -->
                      <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img style="width: 100px" class="profile-user-img img-fluid img-circle" src="{{ asset('admin/images/faces/face0.jpeg')}}" alt="User Image">
                            </div>
                            <h3 class="profile-username text-center">{{ $user->name }}</h3>
                            <!-- <p class="text-muted text-center">Jello Sm</p> -->
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                  <b>Email: {{ $user->email }}</b> 
                                </li>
                                <li class="list-group-item">
                                  <b>Phone: {{ $user->phone_no }}</b> 
                                </li>
                                <li class="list-group-item">
                                  <b>Address: {{ $user->address }}</b>  
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Action</h3>
                        </div>
                        <div class="card-body">
                            <!-- <button class="btn btn-sm btn-success float-left">Active</button> -->

                            <form method="post" action="{{ route('user.edit',['user' => $user->id ])}}">
                                @csrf
                                @method('GET')
                                @if($user->status == 0)
                                <input type="hidden" name="status" value="1">
                                <td><button type="submit" class="btn btn-sm btn-danger float-danger" data-approved="true" data-user_id="1111">Inactive</button></td>
                                @else 
                                <input type="hidden" name="status" value="0">
                                <td><button type="submit" class="btn btn-sm btn-success float-left" data-approved="true" data-user_id="1111">Active</button></td>
                                 @endif
                            </form>
                            
                        </div>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-8">
                        <div class="card">
                        <div class="card-header"></div><!-- /.card-header -->
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-bordered">
                                <li class="nav-item">
                                    <a href="#BankAccount" data-toggle="tab" aria-expanded="true" class="nav-link px-3 py-2 active">
                                      <i class="mdi mdi-image font-18 d-md-none d-block"></i>
                                      <span class="d-none d-md-block">URLs</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="active tab-pane" id="BankAccount">
                                    <ul class="list-group list-group-unbordered mb-3">
                                        @forelse($url as $urlInfo)
                                        <li class="list-group-item">
                                            <b>{{ $urlInfo->url }}</b> 
                                        </li>
                                        @empty
                                        <h5 style="text-align: center;">No Url found!</h5>
                                        @endforelse
                                    </ul>
                                </div>
                            <!-- /.tab-pane -->
                            </div>
                          <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                      </div>
                      <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
        </div>          
    </div>   
  @endsection