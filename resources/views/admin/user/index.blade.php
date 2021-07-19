@extends('admin.layouts.app')
@section('title', __('users'))
@section('content')
            <div class="content-page">
                <div class="content">                    
                     <!-- Start Content-->
    <div class="container-fluid">
        @include('sweetalert::alert')
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- <div class="row">
                  <div class="col-md-2">
                    <button class="btn form-control btn-sm btn-danger float-left" type="button" id="delete_user">Delete!</button>
                  </div>
             </div> -->
             <br>
                <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                <thead>
                <tr >
                  <th><input type="checkbox" id="selectAllchkBox"></th>
                  <th>Sr No.</th>
                  <th>Action</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Approved</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($user as $key=>$userInfo)
                    <tr>
                    <td><input type="checkbox" data-user="1111"></td>
                    <td>{{ $key+1 }}</td>
                    <td>
                      <ul style="padding: initial;">
                        <li style="display:inline-block;"><a href="#" class="btn btn-sm btn-info"><i class="fas fa-edit" style="cursor: pointer;"></i></a></li>
                        <li style="display:inline-block;"><button data-user_id="1111" class="btn btn-sm btn-danger deleteCustomer"><i class="fe-trash"></i></button>
                        </li>
                        <li style="display:inline-block;"><button data-user_id="1111" data-user_name="Billy Bob" class="btn btn-sm btn-success openPasswordModal"><i class="fas fa-key"></i></button>
                        </li>
                        <a title="View" href="{{ route('user.show',['user' => $userInfo->id ])}}" class="btn btn-sm btn-info "><i class="fe-eye"></i></a>
                      </ul>
                    </td>
                    <td>{{ $userInfo->name }}</td>
                    <td>{{ $userInfo->email }}</td>
                    <td>{{ $userInfo->phone_no }}</td>
                    

                    <form method="post" action="{{ route('user.update',['user' => $userInfo->id ])}}">
                            @csrf
                            @method('PATCH')
                            @if($userInfo->status == 0)
                            <input type="hidden" name="status" value="1">
                            <td><button type="submit" class="btn btn-sm btn-danger float-left approved_vendor" data-approved="true" data-user_id="1111">Inactive</button></td>
                            @else 
                            <input type="hidden" name="status" value="0">
                            <td><button type="submit" class="btn btn-sm btn-success float-left approved_vendor" data-approved="true" data-user_id="1111">Active</button></td>
                             @endif
                  </form>
                           
                  </tr>
                   @endforeach
                  
              </tbody>
              </table>
        </div>
  <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  <!-- /.col -->
  </div>
  @endsection
