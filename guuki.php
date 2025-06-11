<?php
    $n = $_REQUEST['number'];

    if ($n % 2 == 0) {
        print $n."偶数です。";
    } else {
        print $n."奇数です。";
    }
?>