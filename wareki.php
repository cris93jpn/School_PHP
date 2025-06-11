<?php
   $wareki = ($_REQUEST['wareki']);
   if ($wareki <= 1867) {
    print  $wareki."年は明治以前です。";
   } elseif ($wareki >= 1868 && $wareki <=1911){
    print $wareki."年は明治".($wareki - 1868)."年です。";
   } elseif ($wareki >= 1912 && $wareki <=1925){
    print $wareki."年は大正".($wareki - 1912)."年です。";
   } elseif ($wareki >= 1926 && $wareki <=1988){
    print $wareki."年は昭和".($wareki - 1925)."年です。";
   } elseif ($wareki >= 1989 && $wareki <=2018){
     print $wareki."年は平成".($wareki - 1989)."年です。";
    } else {
      print  $wareki."年は令和".($wareki - 2018)."です。";
    } 
?>