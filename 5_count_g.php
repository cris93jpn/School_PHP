<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
</head>
<body>
    
    <?php
        $num = 234;
        $val = sprintf("%05d", $num);

        $n1 = substr($val, 0, 1);
        $n2 = substr($val, 1, 1);
        $n3 = substr($val, 2, 1);
        $n4 = substr($val, 3, 1);
        $n5 = substr($val, 4, 1);

        $img = 'counter/';

        echo '<img src="'.$img.$n1.'.png">';
        echo '<img src="'.$img.$n2.'.png">';
        echo '<img src="'.$img.$n3.'.png">';
        echo '<img src="'.$img.$n4.'.png">';
        echo '<img src="'.$img.$n5.'.png">';
    ?>
</body>
</html>