<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup</title>
</head>
<body>
    <?php
    $file = isset($_POST['backup'])? $_POST['backup'] : "";
    id(file_exists("$file")){
        $fp = @fopen("$file", "r");
        while(!feof($fp)){
            print fgets($fp)."<br>";
        }
        fclose($fp);
        $str2 = "bak";
        $str = preg_replace("/$file(txt)?/","$file",$str2);

        print "$file　でバックアップしました。";
    }
    }
    ?>
</body>
</html>