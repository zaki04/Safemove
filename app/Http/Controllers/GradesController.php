<?php

namespace App\Http\Controllers;

use App\Grade;

class GradesController extends Controller
{

  public function grades()

  {
    $grades = Grade::all();

    return view('grades', compact('grades'));
  }

  public function grading()

  {

    return view('grading');
  }

  public function show(Grade $grade)

  {
    return $grade;
  }

}
