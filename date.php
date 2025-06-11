<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日付を扱う</title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Tokyo');

    $youbi=array("日", "月", "火", "水", "木", "金", "土");
    echo date("y/m/d h:i:s <br>");
    echo "<br>";
    $y = date("y");
    $m = date("m");
    $d = date("d");
    $w = date("w");

    $after_5day = mktime(0,0,0,$m,$d+5,$y);
    echo date("y年m月d日", $after_5day);
    echo "<br>";

    echo date("y年m月d日", mktime(0,0,0,$m,0,$y));
    echo "<br>本日は".$youbi[$w]."曜日<br>";
    ?>
</body>
</html>