<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カレンダー</title>
</head>
<body>
    <?php
    //今日の日付を取得
        if(@$_POST['year'] && @$_POST['month']){
            $y = $_POST['year'];
            $m = $_POST['month'];
        } else {
            $y = date("Y");
            $m = date("m");
        }

        //今月最初の曜日を取得
        $firstday_w = date ("w", mktime(0,0,0,$m,1,$y));
        
        //今月最後の日の取得（前月の０日）
        $lastday = date("d", mktime(0,0,0,$m+1,0,$y));

        //今月最後の日の曜日を取得
        $lastday_w = date("w",mktime(0,0,0,$m,$lastday,$y));

        //年月を出力；
        echo "<b>".$y."年".$m."月</b><br>";

        //曜日を出力
        echo "<table border=\"1\">\n";
        echo "<tr>\n";
        echo "<td>日</td>\n";
        echo "<td>月</td>\n";
        echo "<td>火</td>\n";
        echo "<td>水</td>\n";
        echo "<td>木</td>\n";
        echo "<td>金</td>\n";
        echo "<td>土</td>\n";
        echo "</tr>\n";
        
        //日付を出力   
        for($d=1; $d<=$lastday; $d++){
            $w = date("w",mktime(0,0,0,$m,$d,$y));
            if ($w == 0 || $d == 1){
                echo "<tr>";
                //最初の日の曜日まで空白セルで埋める
                if ($firstday_w != 0 && $d==1){
                    for($i=$firstday_w; $i>0; $i--){
                        echo "<td> </td>\n";
                    }
                }
            }
            
            echo "<td>$d";
        }
        if($lastday_w != 6){
            for($i = 6; $i > $lastday_w; $i--){
                echo "<td> </td>\n";
            }
        }
        echo "</tr>\n";
        echo "</table>\n";
        
    ?>

    <form action="cal2.php" method="POST">
        <input type="text" name="year"  size="4">年
        <input type="text" name="month" size="4">月
        <input type="submit" value="カレンダー表示">
    </form>
</body>
</html>