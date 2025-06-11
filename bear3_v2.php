<?php
    $no = $_POST['no'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $perf = $_REQUEST['perf'];
    $nan = $_REQUEST['nan'];
    $gift = isset($_POST['gift']);
    $ribbon = isset($_POST['ribbon']); 
    
    $gift_mess = $gift ? "ギフトボックス" : "なし";
    $ribbon_mess = $ribbon ? "リボン" : "なし";
    $gift_price = $gift ? 50 : 0;
    $ribbon_price = $ribbon ? 50 : 0;

    $ne = array(800, 1000, 1500, 2000);

    $tanka = 10000;
    $kei = ($tanka * $nan) + $ne[$perf] + $gift_price + $ribbon_price;

    $array1 = array($no, $name, $address, $perf, $nan, $gift, $ribbon);
    $line = implode(",",$array1);
    //書き込む
    $fname = "bearv2.txt";
    if(file_exists($fname)){
        $fh=fopen($fname,"a");
    } else {
        $fh=fopen($fname,"w");
    }
    fputs($fh, $line."\n");
    fclose($fh); 
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bear3</title>
</head>
<body>
    <p>ご購入ありがとうございました。<br>
    ご購入された内容を確認されたい場合は<br>
    確認をクリックしてください。
    <?php 
    print "<a href=bear4_v2.php?no=$no>確認</a>";
    ?>
    </p>
</body>
</html>