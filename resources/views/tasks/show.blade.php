<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>詳細ページ|タスク</title>
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

    <h1>タスク詳細ページ</h1>
    <a href="{{ route('tasks.edit',$task) }}">[編集]</a>

    <p>ID:{{ $task->id }}</p>
    <p>内容:{{ $task->body }}</p>
    <p>カテゴリ:{{ $task->category }}</p>
    <p>作成日時:{{ $task->created_at }}</p>
    <p>更新日時:{{ $task->updated_at }}</p>
    <hr>

</body>

</html>
