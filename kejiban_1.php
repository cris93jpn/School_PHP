<?php
        date_default_timezone_get('Tokyo');
        $data_file = 'keijiban.txt';
        if() {
            $ln = explode(",", $lines[0]);
            $no = $ext ? sprintf("$03d", $ln[0]+1) : "001";
        } else{
            $f = array();
            $no = "001";
        }

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!$_POST['name']){
                $errMsg = '名前を入力してください<br>';
            }
        }
        if(isset($_POST['submit'])) {
            if(empty($_POST['name'])){
                $errMsg = 
            } elseif(empty($_POST['free'])) {
                $errMsg = '記事を入力してください';
            }

            
            
            $name = convert_str($_POST['name']);
            $free = convert_str($_POST['free']);
            $delkey = !empty($_POST['delkey'])? convert_str($_POST['delkey']) :
                    '#####';
            $time = date("Y/m/d H:i:s");

            $data = "$no, $name, $free, $delkey, $time\n";
            array_unshift($lines, $data);

            if (isset($_POST['delbtn']) && $ext) {
                for($i = 0; $i < count($lines); $i++) {
                    $ln = explode(",", $lines[$i]);
                    if($ln[0] == $_POST['no'] && $ln[3] == $_POST['Rdkey']) {
                        array_splice($lines, $i, 1);
                        break;
                    }
                }
            }
            if(isset($_POST['submit']) || isset($_POST['delbtn'])) {
                $fk = fopen($data_file, 'w');
                foreach($lines as $line)
                    fputs($fk, $line);
                fclose($fk);
            }
        }
    ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>
<body>
    <form action="keijiban_1.php" method="POST">
        <p>名前：<input type="text" name="name"></p>
        <p>記事：<input type="text" name="free"></p>
        <textarea name="message"></textarea>
        <input type="submit" value="書き込む">
        <input type="delbtn" value="取り消す">
    </form>
</body>
</html>