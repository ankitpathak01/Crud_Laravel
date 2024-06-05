@extends('Form/layout')
@section('content')

<a href="/addnewuser" class="btn btn-success" >Add</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">FATHER NAME</th>
        <th scope="col">AGE</th>
        <th scope="col">EMAIL</th>
        <th scope="col">ADDRESS</th>
        <th scope="col">COUNTRY</th>
        <th scope="col">VIEW</th>
        <th scope="col">UPDATE</th>
        <th scope="col">DELETE</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as  $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->father}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->country}}</td>
        <td><a href="{{route('single',$user->id)}}" class="btn btn-primary">View</a></td>
        <td><a href="{{route('edit',$user->id)}}" class="btn btn-warning" >Update</a></td>
        <td><a href="{{route('delete',$user->id)}}" class="btn btn-danger">Delete</a></td>
        
      </tr>
      @endforeach
     
      
    </tbody>
  </table> 
  
@endsection