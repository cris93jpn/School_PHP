<?php
  
  function year($y, $e) {
    return $y - $e;
  }
   $wareki = ($_REQUEST['wareki']);
   if ($wareki <= 1867) {
    print  $wareki."年は明治以前です。";
   } elseif ($wareki >= 1868 && $wareki <=1911){
    $meiji = year($wareki, 1867);
    print $wareki."年は明治".$meiji."年です。";
   } elseif ($wareki >= 1912 && $wareki <=1925){
    $dai = year($wareki,1911);
    print $wareki."年は大正".$dai."年です。";
   } elseif ($wareki >= 1926 && $wareki <=1988){
    $rei = year($wareki, 1925);
    print $wareki."年は昭和".$rei."年です。";
   } elseif ($wareki >= 1989 && $wareki <=2018){
    $hei = year($wareki, 1988);
     print $wareki."年は平成".$hei."年です。";
    } else {
      $sho = year($wareki,2018);
      print  $wareki."年は令和".$sho."です。";
    } 
?>