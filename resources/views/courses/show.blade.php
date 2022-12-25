<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Course</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='name'>
            {{ $course->name }}
        </h1>
        <div class="edit"><a href="/courses/{{ $course->id }}/edit">edit</a></div>
        <div class='content'>
            <div class="content_course">
                <p class='group'>{{ $course->group }}</p>
                <p class='semester'>{{ $course->semester }}</p>
                <p class='week'>{{ $course->week }}</p>
                <p class='period'>{{ $course->period }}</p>
                <p class='teacher'>{{ $course->teacher }}</p>
                <p class='online_or_offline'>{{ $course->online_or_offline }}</p>
                <p class='how_to_valuate'>{{ $course->how_to_valuate }}</p>
                <p class='attendance'>{{ $course->attendance }}</p>
                <p class='text'>{{ $course->text }}</p>
                <p class='homework'>{{ $course->homework }}</p>
                <p class='test_type'>{{ $course->test_type }}</p>
                <p class='has_report'>{{ $course->has_report }}</p>
                <p class='has_presentation'>{{ $course->has_presentation }}</p>
                <p class='image_path'>{{ $course->image_path }}</p>
            </div>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>