<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員登録申込み画面</title>
</head>
<body>
    <p>
        <?php
        $n = $_POST['namae'];
        $p = $_POST['yuubin'];
        $e = $_POST['employe'];
        $a = $_POST['age'];
        $pay = $_POST['payment'];
        $s = $_POST['sex'];

        $employe = array("正会員", "期間会員", "一時会員");
        if (isset($employe[$e])) {
            $selEm = $employe[$e];
        }
        
        print "<div>会員種別：$selEm \n</div>";
        print "<div>お名前：$n 様 \n</div>";
        print "<div>商品のお送り先：$p \n</div>";
        print "<div>性別：$s \n</div>";
        print "<div>ご請求方法：$pay \n</div>";
        print "<div>以上の内容で商品を受け付けました。\n
        ありがとうございました。\n</div>";
        print "<div>ひみつに年齢をもらいました $a 歳ですね</div>";
        ?>
    </p>
</body>
</html>