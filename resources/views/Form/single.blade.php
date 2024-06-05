@extends('Form/layout')
@section('heading')
    <h3>Single User Record..</h3>
@endsection
@section('content')
     <table class="table table-stripted table-bordered">
        <tr>
            <th width="120px">ID:</th>
            <td>{{$users->id}}</td>
        </tr>
        <tr>
            <th>NAME:</th>
            <td>{{$users->name}}</td>
        </tr>
        <tr>
            <th>FATHER NAME:</th>
            <td>{{$users->fathername}}</td>
        </tr>
        <tr>
            <th>AGE:</th>
            <td>{{$users->age}}</td>
        </tr>
        <tr>
            <th>EMAIL:</th>
            <td>{{$users->email}}</td>
        </tr>
        <tr>
            <th>ADDRESS:</th>
            <td>{{$users->address}}</td>
        </tr>
        <tr>
            <th>COUNTRY:</th>
            <td>{{$users->country}}</td>
        </tr>
      {{-- <h4>ID:{{$users->id}}</h4>
      <h4>NAME:{{$users->name}}</h4>
      <h4>FATHER NAME:{{$users->fathername}}</h4>
      <h4>AGE:{{$users->age}}</h4>
      <h4>EMAIL:{{$users->email}}</h4>
      <h4>ADDRESS:{{$users->address}}</h4>
      <h4>COUNTRY:{{$users->country}}</h4> --}}
    </table>
@endsection