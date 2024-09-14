<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
    <body>
        <h1>Title</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}<h2>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                </div>
            @endforeach
        <p>This is a sample body.</p>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <a href='/posts/create'>create</a>

    </body>
</html>