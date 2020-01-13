<?php
$num = 4;
$num1 =5; 
if ($num == $num) {     //equal operator
	echo "<h1>It is true</h1>"; 
}
echo "<br>";
if($num === $num ){ //identical operator
	echo "<h1>It is true</h1>";
}
echo "<br>";
if($num === $num || $num1 < $num){ //or logical operator
	echo "<h1>It is true</h1>";
}
echo "<br>";
if($num === $num && $num < 8){ //and logical operator
	echo "<h1>It is true</h1>";
}
?>