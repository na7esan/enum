<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>作成ページ|タスク</title>
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

    <h1>タスク作成ページ</h1>

    <form action="{{ route('tasks.store') }}" method="post">
        @csrf

        <label>内容
            <input name="body">
        </label>

        <label>カテゴリ
            <select name="category">
                <option value="1">MSUT</option>
                <option value="2">SOMEDAY</option>
                <option value="3">DONT DO</option>
            </select>
        </label>

        <button>作成</button>

    </form>

</body>

</html>
