<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
   
    <form action="write.php" method="post">
        お名前: <input type="text" name="name"><br>
        EMAIL: <input type="text" name="mail"><br>
        出身地: <input type="text" name="birthPlace"><br>
        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信">
    </form>
</body>





</html>
