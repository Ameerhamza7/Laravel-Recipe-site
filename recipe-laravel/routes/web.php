<?php

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//All listing
Route::get('/',[ListingController::class, 'index'] );

//Show Create form
Route::get('/listings/create',[ListingController::class, 'create'])->middleware('auth');

//Store listing data
Route::post('/listings',[ListingController::class, 'store'] )->middleware('auth');

//Show edit forms
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'] )->middleware('auth');

//Update listing
Route::put('/listings/{listing}',[ListingController::class, 'update'] )->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}',[ListingController::class, 'destroy'] )->middleware('auth');

//Manage listing
Route::get('/listings/manage', [ListingController::class, 'manage' ])->middleware('auth');


//Single listing
Route::get('/listings/{listing}',
[ListingController::class, 'show']);


//Show register/Create form
Route::get('/register', [UserController::class, 'create' ])->middleware('guest');

//Create user
Route::post('/users', [UserController::class, 'store' ]);

//Logout user
Route::post('/logout', [UserController::class, 'logout' ])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login' ])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate' ]);





// Route::get('/test', function(){
//     return response('<h1>Hello world</h1>', 200)
//     -> header('Content-type', 'text/plain')
//     -> header('foo', 'bar') ;
// });

// Route::get('/posts/{id}', function($id){
//     return response('Post '. $id); 
// })->where('id','[0-9]+');

// Route::get('/search' , function(Request $request){
//    return $request->name. ' '. $request->city;
// });