<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addnum</title>
</head>
<body>
    <?php
        function addnum($a, $b) 
        {
            $c = $a + $b;
            return $c;
        }

        $x = 2;
        $y = 3;
        $z = addnum($x, $y);

        print "$x + $y = $z";
    ?>
</body>
</html>