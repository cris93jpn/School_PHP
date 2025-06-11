<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon 2</title>
</head>
<body>
    <form action="" method="post">
        <p>どのポケモンを進化させたいですか？</p><br>
            <input type="radio" name="poke" value="1">ピカチュウ
            <input type="radio" name="poke" value="2">フシギダネ
            <input type="radio" name="poke" value="3">ゼニガメ
            <br><br>
            <input type="submit" value="進化"> 
    </form><br>
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
        public $level;
        public function sinkas() {
            print "おめでとう、".$this->type."タイプの".$this->name."は".$this->level."レベルで".$this->evo."に進化しました。<br>";
        }
        public function __construct($n, $e, $t, $level){
            $this->name=$n;
            $this->evo=$e;
            $this->type=$t;
            $this->level = $level;
        }
    }

    function getLevel($fileName) {
        if (file_exists($fileName)) {
            $fp = fopen($fileName, "r"); 
            if ($fp) {
                $level = fgets($fp);  
                fclose($fp);  
                return (int)trim($level);  
            } else {
                throw new Exception("ファイルを開けませんでした");
            }
        }
        return 0; 
    }

    $pikachu = new pokemons("ピカチュウ","ライチュウ","でんき", getLevel("plevel.txt"));
    $fushigidane = new pokemons("フシギダネ","フシギバナ","どく", getLevel("flevel.txt"));
    $zenigame = new pokemons("ゼニガメ","メックス","みず", getLevel("zlevel.txt"));
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['poke'])) {
            $poke = $_POST['poke'];
            $lvl = 0;
            $pokemon = null;

            if ($poke == 1) {
                $lvl = 15;
                $pokemon = $pikachu;
            } elseif ($poke == 2) {
                $lvl = 10;
                $pokemon = $fushigidane;
            } elseif ($poke == 3){
                $lvl = 5;
                $pokemon = $zenigame;
            }
        
            if ($pokemon && $pokemon->level >= $lvl) {
                print $pokemon->name."のレベルは".$lvl."<br>";
                print $pokemon->name."が進化ができます。<br>";
                $pokemon->sinkas();
            } else {
                print $pokemon->name."のレベルは".$pokemon->level."です。<br>";
                print "進化のレベルが足りません。";
            }
        }

    }
?>
</body>
</html>