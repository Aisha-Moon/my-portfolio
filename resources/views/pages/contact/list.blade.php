@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">List of Messages</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">List Of Messages</li>
                </ol>
                            
         <table class="table table-bordered">
          <thead>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            
          </tr>
          </thead>
          <tbody>
            @if(count($contact)>0)
            @foreach ($contact as $contact)
              <tr>
              <td>{{$contact->id}}</td>
              <td>{{$contact->name}}</td>
              <td>{{$contact->email}}</td>
              <td>{{$contact->phone}}</td>
              <td>{{$contact->message}}</td>
              
            </tr>
            @endforeach
            @endif
            
          </tbody>

         </table>
         
        </main>
@endsection
                
              
