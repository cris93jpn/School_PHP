<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
</head>
<body>
    <?php
    $c = 1;
    if(file_exists("count.txt")){
        $fh = fopen("count.txt", "r");
        $c = fgets($fh);
        fclose($fh);
        $c++;
    } 

    $fp=@fopen("count.txt", "w");
    fputs($fp, $c);
    fclose($fp);

    print "あなたは・・・・ $c 番目の訪問者です。";
    ?>
</body>
</html>