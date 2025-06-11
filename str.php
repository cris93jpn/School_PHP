<?php
    $num = ($_POST['num']);
    $cnt = ($_POST['count']);

    $n = sprintf("%0{$cnt}d", $num);
 
    for ($a = 0; $a < strlen($n); $a++) {
        $n = substr($n,$a,1);
        echo "<img src='counter/{$n}.png'>";
    }
    


?>