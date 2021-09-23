<?php

// ファイルを開く
$openFile = fopen('data/data.txt','r');
// ファイル内容を1行ずつ読み込んで出力

echo '<hr>';

while($str = fgets($openFile)){

    echo '<hr>';
    echo nl2br($str);
    
}
echo '<hr>';

// ファイルを閉じる
fclose( $file ); 
?>