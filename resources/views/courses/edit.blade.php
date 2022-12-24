<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Course</title>
    </head>
    <body>
    <h1 class="title">授業内容画面</h1>
    <div class="content">
        <form action="/courses/{{ $course->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__name'>
                <h2>授業名</h2>
                <input type='text' name='course[name]' value="{{ $course->name }}">
            </div>
            <div class='content__group'>
                <h2>授業群</h2>
                <input type='text' name='course[group]' value="{{ $course->group }}">
            </div>
             <div class='content__name'>
                <h2>学期</h2>
                <input type='text' name='course[semester]' value="{{ $course->semester }}">
            </div>
            <div class='content__week'>
                <h2>曜日</h2>
                <input type='text' name='course[week]' value="{{ $course->week }}">
            </div>
             <div class='content__period'>
                <h2>時限</h2>
                <input type='text' name='course[period]' value="{{ $course->period }}">
            </div>
            <div class='content__teacher'>
                <h2>教授名</h2>
                <input type='text' name='course[teacher]' value="{{ $course->teacher }}">
            </div>
             <div class='content__online_or_offline'>
                <h2>授業形態</h2>
                <input type='text' name='course[online_or_offline]' value="{{ $course->online_or_offline }}">
            </div>
            <div class='content__how_to_valuate'>
                <h2>評価方法</h2>
                <input type='text' name='course[how_to_valuate]' value="{{ $course->how_to_valuate }}">
            </div>
             <div class='content__attendance'>
                <h2>出席</h2>
                <input type='text' name='course[attendance]' value="{{ $course->attendance }}">
            </div>
            <div class='content__text'>
                <h2>教科書</h2>
                <input type='text' name='course[text]' value="{{ $course->text }}">
            </div>
             <div class='content__homework'>
                <h2>課題</h2>
                <input type='text' name='course[homework]' value="{{ $course->homework }}">
            </div>
            <div class='content__test_type'>
                <h2>試験形態</h2>
                <input type='text' name='course[test_type]' value="{{ $course->test_type }}">
            </div> <div class='content__has_report'>
                <h2>レポート</h2>
                <input type='text' name='course[has_report]' value="{{ $course->has_report }}">
            </div>
            <div class='content__has_presentation'>
                <h2>プレゼンテーション</h2>
                <input type='text' name='course[has_presentation]' value="{{ $course->has_presentation }}">
            </div>
             <div class='content__image_path'>
                <h2>教科書画像</h2>
                <input type='text' name='course[image_path]' value="{{ $course->image_path }}">
            </div>
            <input type="submit" value="update">
        </form>
    </div>
    <div class="footer">
            <a href="/courses/{{ $course->id }}">戻る</a>
    </div>
</body>
