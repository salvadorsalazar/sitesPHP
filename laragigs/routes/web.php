<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
Route::get('/listings/create', [ListingController::class,'create']);


          //store listing data
Route::post('/listings', [ListingController::class,'store']);


//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class,'edit']);


//edit submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//delete lstingt
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


      //single listing
Route::get('/listings/{listing}', [ListingController::class,'show']);


























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