<?php
    $op = "";
    $msg ="これから";
    $user = "未設定";
    $pc = "未設定";


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //userの手
        $te = (int)$_POST['te'];
        if($te == '0'){
            $op = "ぐー";
        }
        if($te == '1'){
            $op = "チョキ";
        }
        if($te == '2'){
            $op = "パー";
        }

        //コンピュータの手
        $a = rand(0,2);
        $ran = array('ぐー','チョキ','パー');
        $pc = $ran[$a];

        //勝敗判定
        if($te == $a){
            $msg = "あいこ";
        }elseif(($te == 0 && $a == 1) || ($te == 1 && $a == 2) || ($te == 2 && $a == 0)){
            $msg = "あなたの勝ち";
        } else {
            $msg = "コンピューターの勝ち!";
        }
        $user = $op;
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <p>自分の手を選択してから勝負ボタンを押してください</p>
        <input type="radio" name="te" value="0">ぐー
        <input type="radio" name="te" value="1">チョキ
        <input type="radio" name="te" value="2">パー<br>
        <input type="submit" value="勝負">
        <p>あなたの手は <?php echo $user?></p><br>
        コンピューターの手は <?php echo $pc?><br>
        <p>勝敗は・・・<?php echo $msg; ?></p>
    </form>
</body>
</html>