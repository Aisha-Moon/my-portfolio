@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">Main</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">Main</li>
                </ol>
                            
          <form action="{{route('admin.main.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
            <div class="col-md-3 form-group mt-3">
                <h3>Background Image</h3>
                <img style="height:30vh" src="{{url($main->bc_img)}}" alt="" class="img-thumbnail">
                <input type="file" id="bc_img" name="bc_img" class="mt-3">
            </div>
            <div class="col-md-3 form-group mt-3">
                <h3>Logo</h3>
                <img style="height:30vh" src="{{url($main->logo_img)}}" alt="" class="img-thumbnail">
                <input type="file" id="logo_img" name="logo_img" class="mt-3">
            </div>
            <div class="col-md-4 form-group mt-3">
                <div class="mb-3">
                <label for="title"><h4>Title</h4></label>
                <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                </div>
                <div class="mb-5">
                <label for="subtitle"><h4>Sub Title</h4></label>
                <input type="text" class="form-control" id="subtitle" name="sub_title" value="{{$main->sub_title}}">
                </div>
                <div>
                    <h4>Upload resume</h4>
                    <input type="file" id="resume" name="resume" class="mt-2">
                </div>
              </div>
            </div>
            <input type="submit"  name="submit" class="btn btn-primary mt-5">
          
          </div>
                  </form>
        </main>
@endsection
                
              
