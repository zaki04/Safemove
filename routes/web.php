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

use App\Grade;


Route::get('/', function () {
  return view('index');
});


Route::get('/about', function () {
  return view('about');
});





Route::get('/grades', function () {

  $grades = Grade::all();

  return view('grades', compact('grades'));

});


Route::get('/grades/{grade}', function ($id) {

  $grade = Grade::find($id);

  return $grade;

});
