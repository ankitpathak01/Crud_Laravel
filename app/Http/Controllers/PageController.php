<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function showpage(){
    return view('welcome');
   }
   public function showUser(){
    return view('Project/user');
   }
   public function showDetail(){
    return view('Project/detail');
   }
   public function showUsers(string $id){
    return view('Project/Users',compact('id'));
   }
}
