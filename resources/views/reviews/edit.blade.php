<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビュー編集</title>
    </head>
    <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/reviews/{{ $review->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='review[title]' value="{{ $review->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='review[body]' value="{{ $review->body }}">
            </div>
            <div class='content__rating'>
                <h2>評価</h2>
                <input type='text' name='review[rating]' value="{{ $review->rating }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    </body>
</html>