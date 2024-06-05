<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GetController extends Controller
{
   
   
   public function show(){
    $users=DB::table('students')->get();
    return view('data' ,['data'=>$users]);
   }



public function singleUser(string $id){
   $users=DB::table('students')->where('id',$id)->get();
   return view('user',['data'=>$users]);
   // return $users;
  
}

public function delete(string $id){
   $users=DB::table('students')
   ->where('id',$id)
   ->delete();
   if($users){
      return redirect()->route('home');
   }
}

public function updatepage(string $id){
  $users=DB::table('students')
  ->find($id);
  return view('updateUser',['data'=>$users]);
  if($users){
   return redirect()->route('home');
  }
}

public function updateUser(Request $req,$id){
   $users=DB::table('students')
   ->where('id',$id)
   ->update(['name'=>$req->username,
   'email'=>$req->useremail,
   'city'=>$req->usercity,
   'country'=>$req->usercountry,]);
   if($users){
      return redirect()->route('home');
   }
}


public function addUser(Request $req){
   $users=DB::table('students')
   ->insert([
      'name'=>$req->username,
      'email'=>$req->useremail,
      'city'=>$req->usercity,
      'country'=>$req->usercountry,
   ]);
   if($users){
      return redirect()->route('home');
   }
}
}
