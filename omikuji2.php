<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじ</title>
</head>
<body>
    <h1>おみくじの内容は</h1>
    <?php 
    $kenko = $_POST['kenko'];

    if ($kenko == 0) {
    $kuji = mt_rand(1,6);
    switch($kuji){
        case 1:
            $m = "超健康体";
            break;
        case 2:
            $m = "結構健康";
            break;
        case 3:
            $m = "標準";
            break;
        case 4:
            $m = "血圧注意";
            break;
        case 5:
            $m = "心臓やばい";
            break;    
        case 6:
            $m = "全身病気";
            break;
    }
    print "超健康体！、結構健康！、標準、血圧注意、心臓やばい、全身病、、<br>";
    print "この中で今日の健康運は・・・ $m";

} else {
    $kuji = mt_rand(1,6);
    switch($kuji){
        case 1:
            $a = "ラブラブ！";
            break;
        case 2:
            $a = "出会いあり！";
            break;
        case 3:
            $a = "待ち人きたり";
            break;
        case 4:
            $a = "待ては回路の日和あり";
            break;
        case 5:
            $a = "まだまだ辛抱";
            break;    
        case 6:
            $a = "最悪";
            break;
    }
    print "ラブラブ！、出会いあり！、待ち人きたり、待ては回路の日和あり、まだまだ辛抱、最悪<br>";
    print "この中で今日の健康運は・・・ $a";
}
    ?>
    
</body>
</html>