<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color dress</title>
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
        public function __construct($n,$m) {
            $this->name=$n;
            $this->material=$m;
        }
    }
    class colordress extends Dress {
        public $color;
        public function printmaterial() {
            print $this->name."の素材は".$this->material."で色は".$this->color."です<br>";
        }
        public function __construct($n, $m, $c){
            $this->name=$n;
            $this->material=$m;
            $this->color=$c;
        }
    }

    $ruby = new colordress("ルビー","レイヨン","ワイン");
    $opal = new colordress("オパール","ウール","むらさき");
    $topaz = new colordress("トパーズ","シルク","ピンク");

    $ruby->printmaterial();
    $opal->printmaterial();
    $topaz->printmaterial();
    ?>
</body>
</html>