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
            <th>Title</th>
            <th>Sub-Title</th>
            <th>Big Image</th>
            <th>Small Image</th>
            <th>Description</th>
            <th>Client</th>
            <th>Category</th>
            <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
            @if(count($portfolios)>0)
            @foreach ($portfolios as $portfolio)
              <tr>
              <td>{{$portfolio->id}}</td>
              <td>{{$portfolio->title}}</td>
              <td>{{$portfolio->sub_title}}</td>
              <td>
                <img style="height:10vh;" src="{{url($portfolio->big_img)}}" alt="">
              </td>
              <td>
                <img style="height:10vh;" src="{{url($portfolio->small_img)}}" alt="">
                
              </td>
              <td>{{Str::limit(strip_tags($portfolio->description),40)}}</td>
              <td>{{$portfolio->client}}</td>
              <td>{{$portfolio->category}}</td>
              <td>
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{url('admin/portfolio/edit',$portfolio->id)}}" class="btn btn-success">Edit</a>
                  </div>
                   
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{url('admin/portfolio/delete',$portfolio->id)}}" class="btn btn-danger">Delete</a>
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
                
              
