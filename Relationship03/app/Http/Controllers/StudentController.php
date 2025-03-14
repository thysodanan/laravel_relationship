<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student=Student::orderBy('id','DESC')->with('course')->get();
        return $student;
    }
}
