<?php
echo (5 + 3) ."\n";
echo (5 - 3) ."\n";
echo (5 * 3) ."\n";
echo (5 / 3) ."\n";
echo (5 % 3)."\n";

//comparison
var_dump(5 == 3)  ."\n";
var_dump(5 != 3) ."\n";
var_dump(5 < 3)   ."\n";
var_dump(5 > 3)   ."\n";
var_dump(3 <= 3)  ."\n";
var_dump(5 >= 5)  ."\n";
//logical operators
$a = (false && true);
$b = (true  || false);
$c = (false and false);
$d = (false  or true);
$e = (!$d);
$f = (false Xor true);
var_dump($a, $b, $c, $d, $e, $f);
?>