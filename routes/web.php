<?php

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
  return view('index');
});


Route::get('/about', function () {
  return view('about');
});




Route::get('/area_rating', function () {

  $user_rating = DB::table('user_rating')->get();

  return view('area_rating', compact('user_rating'));

});



Route::get('/user_rating/{rating}', function ($id) {

  $rating = DB::table('user_rating')->find($id);
  dd($rating);

  return view('area_rating', compact('user_rating'));

});
