<?php

namespace App\Http\Controllers;

use App\Grade;

class GradesController extends Controller
{

  public function index()

  {
    $grades = Grade::all();

    return view('grades', compact('grades'));
  }

  public function show(Grade $grade)

  {
    return $grade;
  }

}
