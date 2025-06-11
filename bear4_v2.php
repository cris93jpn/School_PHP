<?php
    //get from bear4
    $no = $_REQUEST['no'];

    $tanka = 10000;
    $fname = "bearv2.txt";
    $f = file($fname);
    
    $gift_price = 0;
    $ribbon_price = 0;
    $gift_mess = '';
    $ribbon_mess = '';  

    $ne = array(800, 1000, 1500, 2000);

    foreach($f as $line){
        list($kdata,$name,$address,$perf,$nan, $gi, $ri)=explode(",",$line);
        if ($no==$kdata){
            $kei = $ne[$perf] + $tanka * $nan;
            $gift_mess = ($gi == 1) ? "1個" : "0個";
            $ribbon_mess = ($ri == 1) ? "1個" : "0個";
            $gift_price = ($gi == 1) ? 50 : 0;
            $ribbon_price = ($ri == 1) ? 50 : 0;
        }
        $kei += $gift_price + $ribbon_price;

        break;
    }

    
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bear4</title>
</head>
<body>
    <table border=1>
        <tr><th>会員No</th><th><?php print $no ?></th></tr>
        <tr><th>おなまえ</th><th><?php print $name ?></th></tr>
        <tr><th>住所</th><th><?php print $address ?></th></tr>
        <tr><th>地域</th><th>
                <?php 
                    $perfc = array("関東・東北、800円","中部・北陸、1000円", "関西・北海道、1500円", "中国・四国・九州、2000円");
                    print $perfc[$perf]; ?>
        </th></tr>
        <tr><th>単価</th><th><?php print $tanka ?></th></tr>
        <tr><th>個数</th><th><?php print $nan ?></th></tr>
        <tr><th>ギフトボックス50円</th><th><?php print $gift_mess ?></th></tr>
        <tr><th>リボン50円</th><th><?php print $ribbon_mess ?></th></tr>
        <tr><th>合計</th><th><?php print $kei ?></th></tr>
        
    </table>
    <br>
    ご利用ありがとうございました。
</body>
</html>