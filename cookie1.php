<?php setcookie('val', 100); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー</title>
</head>
<body>
    <?php
        $getval = isset($_COOKIE['val']) ? $_COOKIE['val'] : "(なし)";
        print "ページ１の値は $getval です。\n";
    ?>
    <p><a href="cookie2.php">ページ２へ</a></p>
</body>
</html>