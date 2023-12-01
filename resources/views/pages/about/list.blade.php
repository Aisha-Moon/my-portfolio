@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">List of Abouts</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">List Of Abouts</li>
                </ol>
                            
         <table class="table table-bordered">
          <thead>
            <tr>
            <th>Id</th>
            <th>Title1</th>
            <th>Title2</th>
            <th>Image</th>
            <th>Description</th>
           
            <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
            @if(count($abouts)>0)
            @foreach ($abouts as $about)
              <tr>
              <td>{{$about->id}}</td>
              <td>{{$about->title1}}</td>
              <td>{{$about->title2}}</td>
              <td>
                <img style="height:10vh;" src="{{url($about->image)}}" alt="">
              </td>
              
              <td>{{Str::limit(strip_tags($about->description),40)}}</td>
              
              <td>
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{url('admin/about/edit',$about->id)}}" class="btn btn-success">Edit</a>
                  </div>
                   
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{url('admin/about/delete',$about->id)}}" class="btn btn-danger">Delete</a>
                  </div>
                </div>
              </td>
             
            </tr>
            @endforeach
            @endif
            
          </tbody>

         </table>
        </main>
@endsection
                
              
