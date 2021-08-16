<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>編集ページ|タスク</title>
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

    <h1>タスク編集ページ</h1>

    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('patch')

        <label>内容
            <input name="body" value="{{ $task->body }}">
        </label>

        <label>カテゴリ
            <select name="category">
                @foreach ($task::CATEGORY as $i => $v)
                    <option value="{{ $i }}" {{ $v === $task->category ? 'selected' : '' }}>
                        {{ $v }}</option>
                @endforeach
            </select>
        </label>

        <button>更新</button>

    </form>

</body>

</html>
