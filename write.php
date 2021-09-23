<?php


// ファイルに書き込み
$name = $_POST['name'];
$mail = $_POST['mail'];
$birthPlace = $_POST['birthPlace'];


//文字作成
$str = $name . '|' . $mail . '|' . $birthPlace . "\n";


$file = fopen('data/data.txt','a' );
fwrite( $file, $str );
fclose( $file ); 

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
