<?php

use App\Http\Controllers\datetimeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::middleware('test')->get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login' , [ LoginController::class , 'index'])->name('login');
Route::get('register' , [ RegisterController::class , 'index'])->name('register.index');


Route::controller(UserController::class)->group(function(){
    Route::post('/userLogin' , 'login')->name('user.login');
    Route::post('/userLogout' , 'logout')->name('user.logout');
    Route::get('/user' , 'index')->name('user.index');
    Route::post('/user' , 'create')->name('user.create');
    Route::get('/user/{id}' , 'show')->name('user.show');
    Route::delete('/user/{id}' , 'destroy')->name('user.destroy');
    Route::get('/bin' ,   'bin')->name('user.bin');
    Route::get('/restore/{id}' , 'restore')->name('user.restore');
    Route::delete('/clearHistory/{id}' , 'clearHistory')->name('user.clearHistory');
});

Route::resource('post' , PostController::class)->middleware('test');

Route::get('/datetime' , [datetimeController::class , 'datetime']); // testing carbon







// Route::get('users', function () {
//     return "Hello users";
// });

// Route::get('users', function ( Request $request  ) {
//    $page = $request->page;
//    $search = $request->search;
//    return "Search $search and These are the results of page number $page" ;
// });

// Route::get('users/{id?}' ,  function($id = null){
//     return "This is user " . $id;
// });

// Route::get('users/{id}/{role}' ,  function($id , $role){
//     return "User " . $id . ":" . $role;
// });
