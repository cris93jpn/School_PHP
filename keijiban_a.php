<?php
        date_default_timezone_set('Asia/Tokyo');

        if(file_exists("keijiban_a.txt")) {
                $f=file("keijiban_a.txt"); //読み込み
                $ln = explode(",", $f[0]); 
                $no = sprintf("%03d", $ln[0]+1);
            }else{
            $f=array(); //ファイルがない時はデータ配列だけつくる
                $no = "001"; //ファイルがない時は００１から始める
        }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
            //エラーならメッセージを設定
        if(!$_POST['name']){
            $errMsg = '名前を入力してください<br>';
        } elseif (!$_POST['email']){
            $errMsg = 'メールを入力してください<br>';
        } elseif(!$_POST['free']) {
            $errMsg = '記事を入力してください'; 
        }

        //エラーメッセージが設定されなかったら新規データを追加
        if(!$errMsg) {
        $free = preg_replace("/\n/", "<BR>", $_POST['free']);
            $time = date("Y/m/d H:i:s");
        $data=array($no, $_POST['name'],$_POST['email'], $free, $time);
        $datag =implode(",", $data);
        array_unshift($f,$datag."\n");
        $fh=fopen("keijiban_a.txt", "w");
            foreach($f as $line)
                fputs($fh, $line);
        fclose($fh);
        header("Location:keijiban_a.php");
        exit;
        }
    }
    
    ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>
<body>
    <form method="post" action="keijiban_a.php">
        <h1>掲示板</h1>
        <?php
        //エラーメッセージが設定されたとき表示
        if(@$errMsg){
            echo "<span style=color:red>".@$errMsg."</span>";
        }
        ?>
        <table border="1">
        <tr><td>名前：
        <input type="text" name="name" size="27">メール<input type="text" name="email" size="27"><br>
        <textarea name="free" cols="80" rows="8"></textarea><br><br>
        <input type="submit" name="submit" value="書き込む">
        <input type="reset" value="取り消す">
        </td></tr></table><hr><br>
        <?php
        //ファイルから一行ずつ読み込みテーブルにセットしていく
        foreach($f as $line){
            list($no,$name, $email, $free, $time) = explode(",", $line);
            print "<table border=1><tr>";
            echo "<th height='50px'>[No.".$no."]名前：".$name."</th>";
            echo "<th>書込み日付：".$time."</th>";
            echo "<th>メール:".$email."</th>";
            echo "</tr><tr>";
            echo "<td align='left' colspan='3'>".$free."</td>";
            echo "</tr></table><br>";
        }
        ?>
    </form>
</body>
</html>