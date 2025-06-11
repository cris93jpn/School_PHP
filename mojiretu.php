<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str="Attention!";
        print "str=Attention!<br>";
        $new_str = strtolower($str);
        print "小文字＝attention!<br>";
        $new_str = strtoupper($str);
        print "小文字＝ATTENTION!<br>";

        $str=" I'm fine.\n";
        print "str=I'm fine.<br>";
        $clern = trim($str);
        print "空白をとる＝I'm fine<br>";

        $str1 = "fine|cloudy|rainy";
        $array1 = explode("|", $str1);
        $str2 = implode(",", $array1);
        print "、で結合＝".$str2."<br>";

        $val1 = 123.4;
        $val2 = sprintf("%d", $val1);
        echo "%dは".$val2."<br>";

        $val3 = sprintf("%f", $val1);
        echo "%fは".$val3."<br>";

        $val4 = sprintf("%s", $val1);
        echo "%sは".$val4."<br>";

        $str = "phpの絵本";
        $lenght1 = strlen($str);
        print "strlen=".$lenght1."文字<br>";

        $lenght2 = mb_strlen($str);
        print "mb_strlen=".$lenght2."文字<br>";

        $place = strpos("Hello World", "o", 2);
        echo "先頭から教えて".$place."番目<br>";

        $str = substr("Hello World",0,7);
        echo "substrで0番目から7文字".$str."<br>";

        $hizuke = "2021-12-21";
        list($y,$m,$d)=explode("-",$hizuke);
        echo "y="."$y<br>"."m="."$m<br>"."d="."$d<br>";

    ?>
</body>
</html>