<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    //クラスを設定
    class Dress {
        public $name; //列の名前を作成
        public $material;
    }
    //行の名前を作成
    $ruby = new Dress; 
    $opal = new Dress;
    $topaz = new Dress;

    //中身を入れる
    $ruby->name="ルビー"; 
    $ruby->material="レイヨン";
    $opal->name="オパール";
    $opal->material="ウール";
    $topaz->name="トパーズ";
    $topaz->material="シルク";

    //表示
    print $ruby->name;
    print $ruby->material;
    print "<br>";
    print $opal->name;
    print $opal->material;
    print "<br>";
    print $topaz->name;
    print $topaz->material;
    print "<br>";

    ?>
</body>
</html>