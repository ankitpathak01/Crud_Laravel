<h1>User data</h1>

 @foreach ($data as $id=>$user )
    <h3>Name:{{$user->name}}</h3> 
    <h3>Email:{{$user->email}}</h3> 
    <h3>City:{{$user->city}}</h3> 
    <h3>Country:{{$user->country}}</h3> 
    
 @endforeach