<?php
    $op = "";
    $msg ="これから";
    $user = "未設定";
    $pc = "未設定";
    $c = 1;
    $win = "自分の手を選択してから勝負ボタンを押してください";
    
    try{
        //jyan.txt ファイルが存在しない場合
        if(!file_exists("jyan.txt")){
            $fp = fopen("jyan.txt", "w");
            if ($fp === false) {
                throw new Exception("ファイル見つかりません");
            }
            fputs($fp, "0");
            fclose($fp);
        }

        //jyan.txtから現在の勝ち数を読み込む
        $fp = fopen("jyan.txt", "r");
        if ($fp === false) {
            throw new Exception("ファイルを開くことができません");
        }
        $c = (int) fgets($fp);
        fclose($fp);
    } catch (Exception $e) {
        // エラーメッセージを表示
        echo "エラー: " . $e->getMessage() . "<br>";
    }

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
            $win = "";
        }elseif(($te == 0 && $a == 1) || ($te == 1 && $a == 2) || ($te == 2 && $a == 0)){
            $msg = "あなたの勝ち";
            $win = "あなたは $c 勝です。";
            $c++;
            // 勝ち数をファイルに保存
            $fp = fopen("jyan.txt", "w");
            if ($fp === false) {
                throw new Exception("勝ち数の保存に失敗しました");
            }
            fputs($fp, $c);
            fclose($fp);
        } else {
            $msg = "コンピューターの勝ち!";
            $win = "";
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
        <p><?php echo $win ?></p>
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