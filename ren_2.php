<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員登録申込み画面</title>
</head>
<body>
    <p>
        <?php
        print "1<br>";
            $tarou=array("eigo"=> "90", "kokugo"=>"85", "sugaku"=>"70");
            print "太郎さんの英語の点数は" . $tarou["eigo"] . "点です<br>";
            print "太郎さんの国語の点数は" . $tarou["kokugo"] . "点です<br>";
            print "太郎さんの数学の点数は" . $tarou["sugaku"] . "点です<br><br><br>";
        print "2<br>";
            $kamoku=array("eigo", "kokugo", "sugaku");
            $kamoku["eigo"] = "90";
            $kamoku["kokugo"] = "85";
            $kamoku["sugaku"] = "70";
            print "太郎さんの英語の点数は" . $kamoku["eigo"] . "点です<br>";
            print "太郎さんの国語の点数は" . $kamoku["kokugo"]  . "点です<br>";
            print "太郎さんの数学の点数は" . $kamoku["sugaku"]  . "点です<br><br><br>";

        print "3<br>";
        $kuni=array("日本", "中国", "イギリス", "アメリカ", "カナダ");
        $syuto=array("東京", "北京", "ロンドン", "ワシントン", "オタワ");
        $world=array($kuni, $syuto);
        echo $world[0][0] . "の首都は" . $world[0][0] . "です。<br>";
        echo $world[0][1] . "の首都は" . $world[1][1] . "です。<br>";
        echo $world[0][2] . "の首都は" . $world[1][2] . "です。<br>";
        echo $world[0][3] . "の首都は" . $world[1][3] . "です。<br>";
        echo $world[0][4] . "の首都は" . $world[1][4] . "です。<br>";
        ?>
    </p>
</body>
</html>