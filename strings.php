<?php
$juice="apple";
echo "Hello world .\n";
echo "He drank some $juice juice.".PHP_EOL ."\n";
echo "He drank some juice made of $juices." ."\n";
echo "He drank some juice made of ${juice}s." ."\n";
echo str_replace("world","Peter","Hello world!") ."\n";
echo str_ireplace("world","Peter","Hello world!") ."\n";
echo str_repeat("Hello", 10) ."\n";
echo strlen("HELLO") ."\n";
$mystring = 'abca';
$findme   = 'a';
echo strpos($mystring, $findme) ."\n";
echo ucfirst("hello world") ."\n";
echo strtolower("HELLO WORLD")."\n";
echo substr("abcdef", -1) ."\n";

?>