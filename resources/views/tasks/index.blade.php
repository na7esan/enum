<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>一覧ページ|タスク</title>
</head>
<body>
    <h1>タスク一覧ページ</h1>
    @foreach ($tasks as $task)
        <p>タスク内容:{{ $task->body }}</p>
        <p>カテゴリ:{{ $task->category}}</p>
        <hr>
    @endforeach
</body>
</html>
