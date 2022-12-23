<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(Course $course)
    {
        return view('courses/index')->with(['courses' => $course->getPaginateByLimit()]);
    }
    
    public function show(Course $course)
    {
        return view('courses/show')->with(['course' => $course]);
    }
}
