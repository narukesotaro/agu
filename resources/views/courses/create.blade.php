<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Course</title>
    </head>
    <body>
        <h1>Course Name</h1>
        <form action="/courses" method="POST">
            @csrf
            <div class="name">
                <h2>授業名</h2>
                <input type="text" name="course[name]" placeholder="授業名"value="{{ old('course.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('course.name') }}</p>
            </div>
            <div class="group">
                <h2>授業群</h2>
                <textarea name="course[group]" placeholder="A">{{ old('course.group') }}</textarea>
                <p class="group__error" style="color:red">{{ $errors->first('course.group') }}</p>
            </div>
            <div class="semester">
                <h2>学期</h2>
                <textarea name="course[semester]" placeholder="前期">{{ old('course.semester') }}</textarea>
                <p class="semester__error" style="color:red">{{ $errors->first('course.semester') }}</p>
            </div>
            <div class="week">
                <h2>曜日</h2>
                <textarea name="course[week]" placeholder="月">{{ old('course.week') }}</textarea>
                <p class="week__error" style="color:red">{{ $errors->first('course.week') }}</p>
            </div>
            <div class="period">
                <h2>時限</h2>
                <textarea name="course[period]" placeholder="5">{{ old('course.period') }}</textarea>
                <p class="period__error" style="color:red">{{ $errors->first('course.period') }}</p>
            </div>
            <div class="teacher">
                <h2>教授</h2>
                <textarea name="course[teacher]" placeholder="青山太郎">{{ old('course.teacher') }}</textarea>
                <p class="teacher__error" style="color:red">{{ $errors->first('course.teacher') }}</p>
            </div>
            <div class="online_or_offline">
                <h2>授業形態</h2>
                <textarea name="course[online_or_offline]" placeholder="対面">{{ old('course.online_or_offline') }}</textarea>
                <p class="online_or_offline__error" style="color:red">{{ $errors->first('course.online_or_offline') }}</p>
            </div>
            <div class="how_to_valuate">
                <h2>評価方法</h2>
                <textarea name="course[how_to_valuate]" placeholder="期末100%"></textarea>
            </div>
            <div class="attendance">
                <h2>出席</h2>
                <textarea name="course[attendance]" placeholder="口頭"></textarea>
            </div>
            <div class="text">
                <h2>教科書</h2>
                <textarea name="course[text]" placeholder="指定教科書"></textarea>
            </div>
            <div class="homework">
                <h2>課題</h2>
                <textarea name="course[homework]" placeholder="レポート"></textarea>
            </div>
            <div class="test_type">
                <h2>試験形態</h2>
                <textarea name="course[test_type]" placeholder="対面記述式"></textarea>
            </div>
            <div class="has_report">
                <h2>レポート</h2>
                <textarea name="course[has_report]" placeholder="あり"></textarea>
            </div>
            <div class="has_presentation">
                <h2>プレゼンテーション</h2>
                <textarea name="course[has_presentation]" placeholder="なし"></textarea>
            </div>
            <div class="image_path">
                <h2>指定教科書画像</h2>
                <textarea name="course[image_path]" placeholder=""></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>