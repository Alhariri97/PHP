<?php
//1 Numbers
// numbers methodes 
echo "<br>";
echo is_numeric(9); // prints 1
echo "<br>";
echo is_numeric("9"); // prints 1 
echo "<br>";
echo is_numeric(0.9); // prints 1
echo "<br>";
echo is_numeric("l"); // prints nothing which evaluates to false
echo "<br>";
echo is_numeric("10e200");
echo "<br>";

$num1 = "100,229,399";
$num2 = str_replace( ",", "",$num1);
echo "<br>";
echo $num2;
echo "<br>";
echo is_numeric($num2);  // 1 ===> True

echo "<br>";
// 2.2 comparing floating points¬
$delta = 0.00001;
$a = 1.0000001;
$b = 1.0000000;
echo $delta;
echo "<br>";
echo "<br>";
echo $a - $b;
echo "<br>";
echo abs($a - $b);
if(abs($a - $b) < $delta){
    echo 2;
}
echo "<br>";
// 2.3 Rounding floating points
echo "<br>";
echo round(2.4); // 2
echo "<br>";
echo round(2.5); // 3 
echo "<br>";
echo round(2.53838, 2); // 2.54 and that's expected and normal !
echo "<br>";
echo ceil(2.4); // 3
echo "<br>";
echo floor(2.4); //2 
// just like Javascript :)
echo "<br>";
// 2.4 operating on a series on ints
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


