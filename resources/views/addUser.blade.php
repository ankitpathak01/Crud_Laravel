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
  <div class="container">
    <div class="row">
    <div class="col-4">
      <h1>New user form</h1>
    <form action="{{route ('add.user')}}" method="POST">
      @csrf
        <div class="mb-3">
          <label for="username" class="form-label">NAME</label>
          <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
         
        </div>
        <div class="mb-3">
          <label for="useremail" class="form-label">EMAIL</label>
          <input type="email" class="form-control" name="useremail" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
          <label for="usercity" class="form-label">CITY</label>
          <input type="text" class="form-control" name="usercity"id="exampleInputCity">
        </div>
        
        <div class="mb-3">
          <label for="usercountry" class="form-label">COUNTRY</label>
          <input type="text" class="form-control" name="usercountry" id="exampleInputCountry">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
    </div>
</body>
</html>