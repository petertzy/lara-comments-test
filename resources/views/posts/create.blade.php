<!DOCTYPE html>
<html>
<head>
    <title>创建文章</title>
</head>
<body>
    <h1>发布新文章</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>标题：</label>
        <input type="text" name="title"><br><br>

        <label>内容：</label><br>
        <textarea name="content" rows="5" cols="40"></textarea><br><br>

        <button type="submit">提交</button>
    </form>
</body>
</html>
