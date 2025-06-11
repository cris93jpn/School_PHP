<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじ</title>
</head>
<body>
    <?php 
        $a = rand(0,5);
        $kuji=array('大吉', '中吉', '小吉', '吉', '末吉', '凶');
        print "あなたの運勢は・・$kuji[$a] です";
    ?>
</body>
</html>