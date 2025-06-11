<?php
    //クッキー情報を格納する
    $counter = isset($_COOKIE['visittimes']) ? $_COOKIE['visittimes'] : '';
    //もし変数$counterがあれば値に１増やし、なければ１を代入する
    if(isset($counter)) { //isset() 関数で変数があれか調べる
    $counter++;
    } else {
        $counter = 1;
    }
    //もし変数$counterの値が３より大きければクッキーを削除する
    if($counter > 3) {
        setcookie('visittimes', $counter, time() - 60);
    } else {
        setcookie('visittimes', $counter);
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訪問回数カウンタ</title>
</head>
<body>
    <?php
    if($counter == 1) {
        //初めてのアクセス
        print "初めまして！<br>\n";
    }elseif($counter == 2) {
        //2回目のアクセス
        print $counter."回目のご訪問ですね。<br>\n";
    }elseif($counter == 3) {
        //3回目にアクセスしたときはブラウザの種数を表示する
        print $counter."回目のご訪問ですね。<br>\n";
        print "あなたのブラウザは
        \"".$_SERVER['HTTP_USER_AGENT']."\" ですね<br>\n";
    }else{
        //4回目のアクセスしたとき
        print $counter . "回目のご訪問ですね。<br>\n";
        print "次回訪問時に訪問回数がリセットされます。<br>\n";
    }
    ?>
</body>
</html>