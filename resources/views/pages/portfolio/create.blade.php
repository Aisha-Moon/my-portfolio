@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">Create</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">create</li>
                </ol>
                            
             <form action="{{url('admin/portfolio/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
            <div class="col-md-3 form-group mt-3">
                <h3>Big Image</h3>
                <img style="height:30vh" src="{{asset('assets/img/big_img.jpeg')}}" alt="" class="img-thumbnail">
                <input type="file"  name="big_img" class="mt-3">
            </div>
            <div class="col-md-3 form-group mt-3">
                <h3>Small Image</h3>
                <img style="height:20vh" src="{{asset('assets/img/smaill_img.jpeg')}}" alt="" class="img-thumbnail">
                <input type="file"  name="small_img" class="mt-3">
            </div>
            <div class="col-md-4 form-group mt-3">
                <div class="mb-3">
                <label for="title"><h4>Title</h4></label>
                <input type="text" class="form-control" id="title" name="title" value="">
                </div>
                <div class="mb-5">
                <label for="subtitle"><h4>Sub Title</h4></label>
                <input type="text" class="form-control" id="subtitle" name="sub_title" value="">
                </div>
                
              </div>
            <div class="col-md-6 form-group mt-3">
              <h3>Description</h3>
              <textarea name="description" class="form-control"  rows="5"></textarea>
            </div>
            <div class="col-md-4 form-group mt-3">
                <div class="mb-3">
                <label for="client"><h4>Client</h4></label>
                <input type="text" class="form-control" id="client" name="client" value="">
                </div>
                <div class="mb-5">
                <label for="category"><h4>Category</h4></label>
                <input type="text" class="form-control" id="category" name="category" value="">
                </div>
                
              </div>

            </div>
            <input type="submit"  name="submit" class="btn btn-primary my-5">
          
          </div>
                  </form>
        </main>
@endsection
                
              
