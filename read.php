<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <?php
        if(file_exists("write.txt")){
            $fp=@fopen("write.txt", "r") or die("file Error");
            while(!feof($fp)){
                print fgets($fp)."<br>";
            }
            fclose($fp);

            print "file関数";
            $f=file("write.txt");
            foreach($f as $value){
                print "<br>" .$value;
            }
        }
    ?>
</body>
</html>