<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>一覧ページ|タスク</title>
</head>

<body>
    <header>
        <nav>
            <ul style="display: flex;justify-content: space-between;">
                <li><a href="{{ route('tasks.index') }}">一覧</a></li>
                <li><a href="{{ route('tasks.create') }}">新規作成</a></li>
            </ul>
        </nav>
    </header>

    <h1>タスク一覧ページ</h1>
    @foreach ($tasks as $task)
        <p>タスク内容:{{ $task->body }}</p>
        <p>カテゴリ:{{ $task->category }}</p>
        <hr>
    @endforeach
</body>

</html>
