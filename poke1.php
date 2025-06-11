<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    <?php
    class Pokemon {
        public $name;
        public $evo;
        public function sinka() {
            print "おめでとう".$this->name."は".$this->evo."に進化しました。<br>";
        }
        public function __construct($n,$e) {
            $this->name=$n;
            $this->evo=$e;
        }
    }
    class pokemons extends Pokemon {
        public $type;
        public function sinkas() {
            print "おめでとう".$this->type."タイプの".$this->name."は".$this->evo."に進化しました。<br>";
        }
        public function __construct($n, $e, $t){
            $this->name=$n;
            $this->evo=$e;
            $this->type=$t;
        }
    }

    $pikachu = new pokemons("ピカチュウ","ライチュウ","でんき");
    $fushigidane = new pokemons("フシギダネ","フシギバナ","どく");
    $zenigame = new pokemons("ゼニガメ","メックス","みず");

    $pikachu->sinkas();
    $fushigidane->sinkas();
    $zenigame->sinkas();
    ?>
</body>
</html>