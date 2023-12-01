@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">List of Services</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">List Of Services</li>
                </ol>
                            
         <table class="table table-bordered">
          <thead>
            <tr>
            <th>Id</th>
            <th>Icon</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @if(count($services)>0)
            @foreach ($services as $service)
              <tr>
              <td>{{$service->id}}</td>
              <td>{{$service->icon}}</td>
              <td>{{$service->title}}</td>
              <td>{{Str::limit(strip_tags($service->description),40)}}</td>
              <td>
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{url('admin/service/edit',$service->id)}}" class="btn btn-success">Edit</a>
                  </div>
                  
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{url('admin/service/delete',$service->id)}}" class="btn btn-danger">Delete</a>
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
                
              
