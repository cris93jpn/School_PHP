<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
    <?php
        
        $why = array("有名だから", "家から近いから", "興味があったから", "尊敬する人がいるから",  "その他");
        $sei = array("男性", "女性");

        $c0 = 0;
        $c1 = 0;
        $c2 = 0;
        $c3 = 0;
        $c4 = 0;
        $m = 0;
        $j = 0;

        
        
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        $db = new SQLite3("db_ank");
        $query = "INSERT INTO tbl_anketo (why, sei)" . "VALUES ($w, $s)";
        $re = $db->exec($query);
        echo "<p>問１　見学理由（０有名だから、1家から近いから、２興味があったか、３尊敬する人がいるから、4その他)</p>";
        echo "<p>問２　性別　（０男性、1女性）</p>";
        echo "<p>　問１。　　問２</p>";
        $query2 = "SELECT * FROM tbl_anketo";
        $re2 =  $db->query($query2);
        while ($info = $re2->fetchArray(SQLITE3_ASSOC)){
            print "　　{$info['why']},　　        　　";
            print "{$info['sei']},";
            print "<br>\n";
        }

        $w = $_POST['why'];
        $s = $_POST['sei'];
        if($w == 0) {
            $c0++;
        } elseif ($w == 1) {
            $c1++;
        } elseif ($w == 2) {
            $c2++;
        } elseif ($w == 3) {
            $c3++;
        } elseif ($w == 4) {
            $c4++;
        }
        if ($s == 0) {
            $m++;
        } elseif ($s == 1) {
            $j++;
        }
        
            print "<集計>　見学理由 <br>";
            print "有名から= $c0 <br>";
            print "家から近いから= $c1 <br>";
            print "興味があったから= $c2 <br>";
            print "尊敬する人がいるから= $c3 <br>";
            print "その他= $c4<br>";
            print "<性別> 見学理由<br>";
            print "男性= $m<br>";
            print "女性= $j<br>";
        $db->close(); 
        }
    ?>
</body>
</html>