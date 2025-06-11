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
        public $name;
        public $material;
        public function printdata() {
            print $this->name."の素材は".$this->material."です<br>";
        }
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

    $ruby->printdata();
    ?>
</body>
</html>