<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Course</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <x-app-layout>
   　　 <x-slot name="header">
        授業一覧
       </x-slot>
    </head>
    <body>
        <h1>Course Name</h1>
        <a href='/courses/create'>create</a>
        <div class='courses'>
            @foreach ($courses as $course)
            <div class='course'>
                <h2 class='name'>
                    <a href="/courses/{{ $course->id }}">{{ $course->name }}</a>
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
                <form action="/courses/{{ $course->id }}" id="form_{{ $course->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $course->id }})">delete</button> 
                </form>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $courses->links() }}
        </div>
        <script>
        function deletePost(id) {
            'use strict'

             if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
             document.getElementById(`form_${id}`).submit();
             }
          }
       </script>
       {{ Auth::user()->name }}
    </body>
    </x-app-layout>
</html>