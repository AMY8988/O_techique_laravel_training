<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login' , [ LoginController::class , 'index'])->name('login');
Route::get('register' , [ \App\Http\Controllers\RegisterController::class , 'index'])->name('register');





// Route::get('users', function () {
//     return "Hello users";
// });

// Route::get('users', function ( Request $request  ) {
//    $page = $request->page;
//    $search = $request->search;
//    return "Search $search and These are the results of page number $page" ;
// });

// Route::get('users/{id}' ,  function($id){
//     return "This is user " . $id;
// });

// Route::get('users/{id}/{role}' ,  function($id , $role){
//     return "User " . $id . ":" . $role;
// });
