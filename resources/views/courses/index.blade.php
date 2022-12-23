<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Course</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Course Name</h1>
        <div class='courses'>
            @foreach ($courses as $course)
            <div class='course'>
                <h2 class='name'>{{ $course->name }}</h2>
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
            @endforeach
        </div>
        <div class='paginate'>
            {{ $courses->links() }}
        </div>
    </body>
</html>