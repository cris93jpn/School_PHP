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
    print "ページ2の値は $getval です。\n";
    ?>
    <p><a href="cookie1.php">ページ１へ</a></p>
</body>
</html>