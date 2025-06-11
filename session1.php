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
        $_SESSION['bridge'] = 100;
        $b = $_SESSION['bridge'];
        print "ページ１の値は $b です。 \n";
    ?>
    <p><a href="session2.php">ページ2へ</a></p>
</body>
</html>