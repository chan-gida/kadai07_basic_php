<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>アンケートアプリ</title>
</head>

<body>
    <header>
        <h3>アンケートアプリ</h3>
    </header>

    <form action="write.php" method="post">
        お名前: <input type="text" name="name"><br>
        EMAIL: <input type="text" name="email"><br>
        感想：<input type="text" name="rank"><br>
        コメント：<textarea name="comment"></textarea><br>
        <input type="submit" value="送信">
    </form>
</body>

</html>