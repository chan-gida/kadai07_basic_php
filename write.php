<?php
// var_dump($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$rank = $_POST['rank'];
$comment = $_POST['comment'];
$time = date('Y/m/d H:i:s'); //日付を取得

$data = $time . '/' . $name . '/' . $email . '/' . $rank . '/' . $comment . "\n";

file_put_contents('data/data.txt', $data, FILE_APPEND);  //DB(data/data.txt)に書き込み
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>