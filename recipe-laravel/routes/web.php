<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Recipe;

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
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Recipe::all()
            
    ]);
});

//Single listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing'=> Recipe::find($id)
    ]);
});

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