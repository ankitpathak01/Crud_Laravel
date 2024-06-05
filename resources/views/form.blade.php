<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="{{route('addUser')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" value="{{old('username')}}" class="form-control @error ('username') is-invalid @enderror" name="username"id="exampleInputEmail1" aria-describedby="emailHelp">
          <span class="text-danger">
            @error('username')
                {{$message}}
            @enderror
          </span>
          
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" value="{{old('useremail')}}" class="form-control @error ('useremail') is-invalid @enderror" name="useremail" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('useremail')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" value="{{old('userpassword')}}" class="form-control @error ('userpassword') is-invalid @enderror" name="userpassword" id="exampleInputPassword1">
        </div>
        @error('userpassword')
                {{$message}}
            @enderror
          </span>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>