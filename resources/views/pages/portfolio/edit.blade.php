@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">Edit</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">Edit</li>
                </ol>
                            
          <form action="{{url('admin/portfolio/update',$portfolio->id)}}" method="post" enctype="multipart/form-data">
            @csrf
          
           <div class="row">
            <div class="col-md-3 form-group mt-3">
                <h3>Big Image</h3>
                <img style="height:30vh" src="{{url($portfolio->big_img)}}" alt="" class="img-thumbnail">
                <input type="file"  name="big_img" class="mt-3">
            </div>
            <div class="col-md-3 form-group mt-3">
                <h3>Small Image</h3>
                <img style="height:20vh" src="{{url($portfolio->small_img)}}" alt="" class="img-thumbnail">
                <input type="file"  name="small_img" class="mt-3">
            </div>
            <div class="col-md-4 form-group mt-3">
                <div class="mb-3">
                <label for="title"><h4>Title</h4></label>
                <input type="text" class="form-control" id="title" name="title" value="{{$portfolio->title}}">
                </div>
                <div class="mb-5">
                <label for="subtitle"><h4>Sub Title</h4></label>
                <input type="text" class="form-control" id="subtitle" name="sub_title" value="{{$portfolio->sub_title}}">
                </div>
                
              </div>
            <div class="col-md-6 form-group mt-3">
              <h3>Description</h3>
              <textarea name="description" class="form-control"  rows="5">{{$portfolio->description}}</textarea>
            </div>
            <div class="col-md-4 form-group mt-3">
                <div class="mb-3">
                <label for="client"><h4>Client</h4></label>
                <input type="text" class="form-control" id="client" name="client" value="{{$portfolio->client}}">
                </div>
                <div class="mb-5">
                <label for="category"><h4>Category</h4></label>
                <input type="text" class="form-control" id="category" name="category" value="{{$portfolio->category}}">
                </div>
                
              </div>

            </div>
            <input type="submit"  name="submit" class="btn btn-primary my-5">
          
          </div>
          
          </div>
                  </form>
        </main>
@endsection
                
              
