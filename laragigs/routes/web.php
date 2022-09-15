<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings',[
        'heading' => 'lateset listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'listing One',
                'description' => 'thie is a description of text
                 the will e enterees int
                this array ; oidfsdfsoidfhs
                uhfsdhfsuihdfsduf'
            ],
             [
                'id' => 2,
                'title' => 'listing TWO',
                'description' => 'thie is a description of text
                 the will e enterees int
                this array ; oidfsdfsoidf
                hsuhfsdhfsuihdfsduf'
             ]
        
        ]
          ]);

        
  


});


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