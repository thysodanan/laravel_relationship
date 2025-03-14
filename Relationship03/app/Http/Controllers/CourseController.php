<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
    $course=Course::orderBy('id','DESC')->with('student')->get();
    return $course;
    }
}
