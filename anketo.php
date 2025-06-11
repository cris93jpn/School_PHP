<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
    <?php
        $w = $_POST['why'];
        $s = $_POST['sei'];
        $db = new SQLite3("db_ank");
        $query = "INSERT INTO tbl_anketo (why, sei)" . "VALUES ($w, $s)";
        $re = $db->exec($query);
        echo "<p>問１　見学理由（０有名だから、1家から近いから、２興味があったから、３尊敬する人がいるから、4その他)</p>";
        echo "<p>問２　性別　（０男性、1女性）</p>";
        echo "<p>　問１。　　問２</p>";
        $query2 = "SELECT * FROM tbl_anketo";
        $re2 =  $db->query($query2);
        while ($info = $re2->fetchArray(SQLITE3_ASSOC)){
            print "　　{$info['why']},　　        　　";
            print "{$info['sei']},";
            print "<br>\n";
        }
        $db->close();
    ?>
</body>
</html>