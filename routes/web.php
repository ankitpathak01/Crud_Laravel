<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\GetController;
use App\Http\Controllers\AlluserController;





// Route::get('/', function () 
//     return view('welcome');
// });
// Route::get('/',[PageController::class,'showpage']);

// Route::controller(PageController::class)->group(function(){
//     Route::get('/','showpage')->name('home');
//     Route::get('/user','showUser')->name('user');
//     Route::get('/users/{id}','showUsers')->name('dynamicuser');
//     Route::get('/detail','showDetail')->name('detail');
// });

// Route::get('/user/{id}',[GetController::class,'singleUser'])->name('view.user');





//This is for crud operation...

// Route::controller (GetController::class)->group(function(){

//     Route::get('/','show')->name('home');

//     Route::get('/user/{id}','singleUser')->name('view.user');
    
//     Route::get('/delete/{id}','delete')->name('delete.user');
  
//     Route::post('/update/{id}','updateUser')->name('update.user');
//     Route::get('/updatepage/{id}','updatepage')->name('update.page');
  
//     Route::post('/addUser','adduser')->name('add.user');
// });

// Route::view('newuser','addUser');


// Route::view('/','form');
// Route::post('/add',[UserController::class,'addUser'])->name('addUser');


// Route::view('/','Form/adduser');
Route::view('addnewuser','Form/adduser');
Route::get('/',[AlluserController::class,'show'])->name('home');
// Route::post('/add',[AlluserController::class,'validateAllUser'])->name('add');
Route::post('/addall',[AlluserController::class,'addAll'])->name('add');
Route::get('/single/{id}',[AlluserController::class,'singleUser'])->name('single');
Route::get('/delete/{id}',[AlluserController::class,'deleteUser'])->name('delete');
Route::get('/edit/{id}',[AlluserController::class,'editUpdate'])->name('edit');
Route::post('/update/{id}',[AlluserController::class,'Update'])->name('update');


