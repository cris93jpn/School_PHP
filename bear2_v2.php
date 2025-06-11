<?php
//get info from bear1
    $no = $_POST['number'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $perf = $_POST['perf'];
    $nan = $_POST['nan'];
    $tanka = 10000;
    
    $gift = isset($_POST['gift']) ? 1 : 0; 
    $ribbon = isset($_POST['ribbon']) ? 1 : 0;

    $gift_mess = $gift ? "ギフトボックス" : "なし";
    $ribbon_mess = $ribbon ? "リボン" : "なし";

    $gift_price = $gift ? 50 : 0;
    $ribbon_price = $ribbon ? 50 : 0;
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bear2</title>
    <style>
        body {
            text-align: left;
        }
    </style>
</head>
<body>
    <p>内容を確認して</p>
    <p>ご購入の際は「お買い物が決定します」ボタンをクリックしてください</p>
    <table border='1'>
        <tr>
            <td style='width: 120px'>会員No</td>
            <td style='width: 200px'><?php print $no; ?></td>
        </tr>
        <tr>
            <td style='width: 80px'>お名前</td>
            <td style='width: 200px'><?php print $name; ?></td>
        </tr>
        <tr>
            <td style='width: 80px'>住所</td>
            <td style='width: 200px'><?php print $address; ?></td>
        </tr>
        <tr>
            <td style='width: 80px'>地域</td>
            <td style='width: 200px'>
                <?php 
                    $perfc = array("関東・東北、800円","中部・北陸、1000円", "関西・北海道、1500円", "中国・四国・九州、2000円");
                    print $perfc[$perf]; ?>
            </td>
        </tr>
        <tr>
            <td style='width: 80px'>個数</td>
            <td style='width: 200px'><?php print $nan; ?></td>
        </tr>
        <tr>
            <td style='width: 80px'><?php print $gift_mess?></td>
            <td style='width: 200px'><?php print $gift_price ? "50円" : "なし" ?></td>
        </tr>
        <tr>
            <td style='width: 80px'><?php print $ribbon_mess?></td>
            <td style='width: 200px'><?php print $ribbon_price ? "50円" : "なし" ?></td>
        </tr>
    </table>
<form action="bear3_v2.php" method="post">
<?php  
    echo "<input type=hidden name=no value=$no>";
    echo "<input type=hidden name=name value=$name>";
    echo "<input type=hidden name=address value=$address>";
    echo "<input type=hidden name=perf value=$perf>";
    echo "<input type=hidden name=nan value=$nan>";
    echo "<input type=hidden name=gift value=$gift>";
    echo "<input type=hidden name=ribbon value=$ribbon>";
?>
<br>
<input type="submit" value="お買い物が決定します">
</body>
</html>