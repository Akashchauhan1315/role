@extends('admin.layouts.app')
@section('title', __('messages.page_titles.HOME'))
@section('content')
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('admin.includes.header')
    @include('sweetalert::alert')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      @include('admin.includes.side_bar')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Test</h4>
                  
                  <form  method="post" enctype="multipart/form-data" action="{{ route('test.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                      @error('name')
                        <label style="color: red">{{ $message }}</label>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Description</label>
                      <textarea type="text" class="form-control" id="exampleInputName1" placeholder="Description" name="description"></textarea>
                      @error('description')
                        <label style="color: red">{{ $message }}</label>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="image" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      @error('image')
                        <label style="color: red">{{ $message }}</label>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Video Description</label>
                      <textarea type="text" class="form-control" id="exampleInputName1" placeholder="Video Description" name="video_description"></textarea>
                      @error('video_description')
                        <label style="color: red">{{ $message }}</label>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</div>
@endsection