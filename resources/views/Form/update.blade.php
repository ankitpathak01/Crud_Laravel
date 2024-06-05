@extends('Form/layout')

@section('content')
<form action="{{route('update',$users->id)}}" method="POST">
    @csrf
   
    <div class="mb-3">
      <label for="username" class="form-label">NAME</label>
      <input type="text" value="{{$users->name}}"  class="form-control @error ('username') is-invalid @enderror" name="username" id="username" >
      <span class="text-danger">
        @error('username')
            {{$message}}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="fathername" class="form-label">FATHER NAME</label>
      <input type="text"  value="{{$users->fathername}}" class="form-control @error ('username') is-invalid @enderror" name="fathername" id="fathername">
      <span class="text-danger">
        @error('username')
            {{$message}}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="userage" class="form-label">AGE</label>
      <input type="number" value="{{$users->age}}" class="form-control @error ('username') is-invalid @enderror" name="userage" id="userage">
      <span class="text-danger">
        @error('username')
            {{$message}}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="useremail" class="form-label">EMAIL</label>
      <input type="email" value="{{$users->email}}" class="form-control @error ('username') is-invalid @enderror" name="useremail" id="useremail" aria-describedby="emailHelp">
      <span class="text-danger">
        @error('username')
            {{$message}}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="useraddress" class="form-label">ADDRESS</label>
      <input type="text" value="{{$users->address}}" class="form-control @error ('username') is-invalid @enderror" name="useraddress" id="useraddress">
      <span class="text-danger">
        @error('username')
            {{$message}}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="usercountry" class="form-label">COUNTRY</label>
      <input type="text" value="{{$users->country}}" class="form-control @error ('username') is-invalid @enderror" name="usercountry" id="usercountry">
      <span class="text-danger">
        @error('username')
            {{$message}}
        @enderror
      </span>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>
@endsection
