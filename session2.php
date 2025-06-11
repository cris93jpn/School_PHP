<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション管理</title>
</head>
<body>
    <?php
        $b = $_SESSION['bridge'];
        print "ページ２の値は $b です。 \n";
    ?>
    <p><a href="session1.php">ページ1へ</a></p>
</body>
</html>