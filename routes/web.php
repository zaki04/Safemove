<?php

Route::get('/', 'IndexController@index');

Route::get('/grading', 'GradesController@create');

Route::get('/grades', 'GradesController@show');

Route::post('/hoes', ['as' => '/grading', 'uses' => 'GradesController@store']);
