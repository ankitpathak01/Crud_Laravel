<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
      #btn{
        margin: 10px;
        padding: 10px;
      }
    </style>
</head>
<body>
  <h1>Details of all Users</h1>
  <br>
  <a href="/newuser" id="btn" class="btn btn-success ">Add New User</a></td>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">View</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($data as $id=>$user )
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->country}}</td>
            <td><a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
            <td><a href={{route('update.page',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
            <td><a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
            
          </tr>
          @endforeach
          
        </tbody>
      </table>
</body>
</html>


