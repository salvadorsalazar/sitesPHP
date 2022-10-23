<?php

use App\Models\Listing;
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


//all listings
Route::get('/', [ListingController::class,'index']);
        
  

//show create form
Route::get('/listings/create', [ListingController::class,'create'])->middleware('auth');


          //store listing data
Route::post('/listings', [ListingController::class,'store'])->middleware('auth');


//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class,'edit'])->middleware('auth');


//edit submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete lstingt
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


//manage listings
Route::get('/listings/manage', [ListingController::class,'manage'])->middleware('auth');





      //single listing
Route::get('/listings/{listing}', [ListingController::class,'show']);




// show register create form
Route::get("/register", [UserController::class, 'create'])->middleware('guest');



//create new user
Route::post('/users',[UserController::class,'store']);


//logout user
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//login user show form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');


//log in user

Route::post('/users/authenticate',[UserController::class,'authenticate']);









// Route::get('/hello', function () {
//     return 'hello world amd welcome home';
// });


// Route::get('/3rd', function () {
//     return 'this is the 3rd page';
// });


// Route::get('/posts/{id}', function ($id) {
// // ddd($id);

//     return response('Post ' . $id)    ;
// })-> where('id','[0-9]+');


// Route::get('/search',function(Request $request){
//     return $request->name . ' ' .$request->city;
    
// });