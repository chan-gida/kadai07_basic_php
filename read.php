<?php
// ファイルを開く
$data = file_get_contents('data/data.txt');  //DB(data/data.txt)から取得

// ファイル内容を1行ずつ読み込んで出力
echo nl2br($data) // brは<br>改行タグと同様

// ファイルを閉じる
?>