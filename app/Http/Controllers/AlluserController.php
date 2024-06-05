<?php

namespace App\Http\Controllers;
use App\Models\alluser;
use Illuminate\Http\Request;

class AlluserController extends Controller
{
    public function show(){
        $users=alluser::all();
        return view('Form/home',compact('users'));
    }
   
//  
 public function addAll(Request $req){
    // $req->validate([
    //             'username'=>'required',
    //             'fathername'=>'required',
    //             'age'=>'required',
    //             'email'=>'required|email',
    //             'address'=>'required',
    //             'country'=>'required',

    // ]);

    $users=alluser::create([
        'name'=>$req->username,
        'fathername'=>$req->fathername,
        'age'=>$req->userage,
        'email'=>$req->useremail,
        'address'=>$req->useraddress,
        'country'=>$req->usercountry,
       
     ]);
     if($users){
         return redirect()->route('home');
     }
 }

 public function singleUser(string $id){
    $users=alluser::find($id);
    // return all();
    return view('Form/single',compact('users'));
 }
 public function deleteUser(string $id){
    $users=alluser::find($id)
    ->delete();
    // return all();
    if($users){
        return redirect()->route('home');
    }
 }

 public function editUpdate(string $id){
      $users=alluser::find($id);
      return view('Form/update',compact('users'));
 }

 public function Update(Request $req, string $id){
    //  $req->validate([
    //             'username'=>'required',
    //             'fathername'=>'required',
    //             'userage'=>'required',
    //             'useremail'=>'required|email',
    //             'useraddress'=>'required',
    //             'usercountry'=>'required',

    // ]);
      $users=alluser::where('id',$id)
      ->Update([
        'name'=>$req->username,
        'fathername'=>$req->fathername,
        'age'=>$req->userage,
        'email'=>$req->useremail,
        'address'=>$req->useraddress,
        'country'=>$req->usercountry,
      ]);
      if($users){
        return redirect()->route('home');
    }
 }

}
