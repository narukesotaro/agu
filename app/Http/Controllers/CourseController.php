<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\CourseRequest;

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
    
    public function create()
    {
        return view('courses/create');
    }
    
    public function store(Course $course, CourseRequest $request)
    {
        $input = $request['course'];
        $course->fill($input)->save();
        return redirect('/courses/' . $course->id);
    }
}
