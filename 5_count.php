<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
</head>
<body>
    <?php
    if(file_exists("count.txt")){
        $fp=@fopen("count.txt", "r") or die ("File Error");
        $c = fgets($fp);
        fclose($fp);
        $c = (int)$c + 1;
        
    } else {
        $c = 1;
    }

    $fp=@fopen("count.txt", "w") or die ("File Error");
    fwrite($fp, $c);
    fclose($fp);

    print "あなたは・・・・ $c 番目の訪問者です。";
    ?>
</body>
</html>