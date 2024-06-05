<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            'username'=>'required',
            'useremail'=>'required|email',
            'userpassword'=>'required',
            
        ]);
        return $req->all();
    }
}
