<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'course.name' => 'required|string|',
            'course.group' => 'required|string',
            'course.semester' => 'required|string',
            'course.week' => 'required|string',
            'course.period' => 'required|string',
            'course.teacher' => 'required|string',
            'course.online_or_offline' => 'required|string',
            ];
    }
}
