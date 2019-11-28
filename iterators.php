<?php 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

$i = 1;
while ($i <= 10) {
    echo $i++;  
}

$i = 100;
do {
    echo "\$i is $i.";
} while ($i < 10); //used in lieu of break
?>