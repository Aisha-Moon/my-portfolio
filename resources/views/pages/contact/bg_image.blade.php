@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">Contact</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">Contact Background</li>
                </ol>
                            
          <form action="{{route('admin.contact.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
            <div class="col-md-3 form-group mt-3">
                <h3>Background Image</h3>
                <img style="height:30vh" src="{{url($contact->bg_img)}}" alt="" class="img-thumbnail">
                <input type="file" id="bg_img" name="bg_img" class="mt-3">
            </div>
            </div>
            <input type="submit"  name="submit" class="btn btn-primary mt-5">
            </form>
        </main>
@endsection
                
              
