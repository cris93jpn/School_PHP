<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read try</title>
</head>
<body>
    <?php
        try{
            if(!file_exists("write2.txt")){
                throw new Exception("ファイル見つかりません");
            }
            $fp=@fopen("write2.txt", "r");
            while(!feof($fp)){
                print fgets($fp)."<br>";
            }
            fclose($fp);
        }
        catch(Exception $e){
            print "キャッチされた例外： (".$e->getMessage().")<br>";
        }
        finally{
            echo "プログラムは終了しました。<br>";
        }
    ?>
</body>
</html>