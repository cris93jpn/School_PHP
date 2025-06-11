<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            foreach($_SERVER as $key=>$value){
                echo "<b>$key:</b>$value<br>";
            }
        }
?>
    
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
<body>
    確認ボタンを押して$_SERVERの内容を表示してみましょう<br>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" name="form1">
        <input type="submit" value="確認">
    </form>
</body>
</html>