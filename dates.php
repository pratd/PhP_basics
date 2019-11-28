<?php 
echo "Today is " . date("Y/m/d") . "<br>";
echo "day is " .date("D") ."<br>"; 
echo "Month is " .date("M") ."<br>"; 
echo "Minute is " .date("i") ."<br>";
$objdate = new DateTime('NOW');
echo $objdate->format('c'); 
?>