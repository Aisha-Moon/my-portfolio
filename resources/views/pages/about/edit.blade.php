@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">Edit</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">Edit</li>
                </ol>
                            
          <form action="{{url('admin/about/update',$about->id)}}" method="post" enctype="multipart/form-data">
            @csrf
          
           <div class="row">
            <div class="col-md-3 form-group mt-3">
                <h3>Image</h3>
                <img style="height:30vh" src="{{url($about->image)}}" alt="" class="img-thumbnail">
                <input type="file"  name="image" class="mt-3">
            </div>
            
            <div class="col-md-4 form-group mt-3">
                <div class="mb-3">
                <label for="title"><h4>Title1</h4></label>
                <input type="text" class="form-control" id="title" name="title1" value="{{$about->title1}}">
                </div>
                <div class="mb-5">
                <label for="subtitle"><h4>Title2</h4></label>
                <input type="text" class="form-control" id="subtitle" name="title2" value="{{$about->title2}}">
                </div>
                
              </div>
            <div class="col-md-6 form-group mt-3">
              <h3>Description</h3>
              <textarea name="description" class="form-control"  rows="5">{{$about->description}}</textarea>
            </div>
           

            </div>
            <input type="submit"  name="submit" class="btn btn-primary my-5">
          
          </div>
          
          </div>
                  </form>
        </main>
@endsection
                
              
