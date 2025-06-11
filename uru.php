<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>西暦何年</title>
</head>
<body>
<?php
    $nen = $_POST['year']; 
    $totaly = [];
    $count = 0;
    for ($i = 1; $i <= $nen; $i++) {
        if ($i % 400 == 0 || ($i % 100 != 0 && $i % 4 == 0)) {
            $totaly[] = $i;
            if ($i % 400 == 0) {
                echo "<span style='color: red;'>$i</span>, ";
            } else {
                echo "$i, ";
            }

            $count++;

            if ($count % 20 == 0) {
                echo "<br>";
            }
        }
    }
    echo "うるう年は" . count($totaly) . "回です";
?>
</body>
</html>