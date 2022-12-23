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
}
