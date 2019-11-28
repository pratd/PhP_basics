<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

print_r($array) ."\n";

$array = array(
    "1" => 1,
    "2" => 2.5
);

print_r($array) ."\n";

$cars = array(
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>" ."\n";

echo count($cars)."\n";

$my_array1 = array("size" => "big", 2,3 ); 
$my_array2 = array("a", "b", "size" => "medium", 
                        "shape" => "circle", 4); 
$res = array_merge($my_array1, $my_array2); 
  
print_r($res) ."\n";

$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo end($people) ."\n";

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

?>