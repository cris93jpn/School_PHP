<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>load</title>
</head>
<body>
    <?php
    if(move_uploaded_file(
        $_FILES['upfile']['tmp_name'],
        "./".$_FILES['upfile']['name']
    ) == FALSE) {
        print "　失敗しました。";
    }else{
        print "<h3>ファイル送信</h3>";
        print "アップロード成功<br>";
        print "<img src='".($_FILES['upfile']['name'])."'>";
    }
    ?>
</body>
</html>