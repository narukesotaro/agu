<!DOCTYPE htmlL>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビュー投稿</title>
    </head>
    <body>
        <h1>レビュー投稿</h1>
        <form action="/reviews" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="review[title]" placeholder="タイトル" value="{{ old('review.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="review[body]" placeholder="授業の内容、感想、単位取得に関すること等">{{ old('review.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <div class="rating">
                <h2>Rating</h2>
                <textarea name="review[rating]" placeholder="五段階評価">{{ old('review.rating') }}</textarea>
                <p class="rating__error" style="color:red">{{ $errors->first('review.rating') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>