<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員登録申込み画面</title>
</head>
<body>
    <p>
        <?php
        print "<div>お名前：{$_POST['namae']} 様 \n</div>";
        print "<div>商品のお送り先：{$_POST['yuubin']}\n</div>";
        print "<div>性別：{$_POST['sex']}\n</div>";
        print "<div>ご請求方法：{$_POST['payment']}\n</div>";
        print "<div>以上の内容で商品を受け付けました。\n
        ありがとうございました。\n</div>";
        print "<div>ひみつに年齢をもらいました{$_POST['age']}歳ですね</div>";
        ?>
    </p>
</body>
</html>