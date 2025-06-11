<?php
    $count = 0;
    for ($i = 1; $i <21; $i++){
        
        if($i % 3 == 0) {
            print "あほ<br>";
            $count++;
            if($count == 5) {
                break;
            }
            continue;
        }
        if ($i == 8){
            print "ワン<br>";
            continue;
        }
        print "$i<br>";
    }
    print "おもろー<br>";
?>
