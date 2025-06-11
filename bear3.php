<?php
    $no = $_POST['no'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $perf = $_REQUEST['perf'];
    $nan = $_REQUEST['nan'];


    $array1 = array($no, $name, $address, $perf, $nan);
    $line = implode(",",$array1);
    //書き込む
    $fname = "bear.txt";
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
    print "<a href=bear4.php?no=$no>確認</a>";
    ?>
    </p>
</body>
</html>