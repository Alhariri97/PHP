<?php 
// PHP Cookbook 
// After watshing online videos on php now it's the time to 
// Start apply the concepts on real code and to get
// my hands dirty so here I got php book and appling its
// content into real code. 
// H
//1 Strings
// String methodes 
echo "Hello PHP World";
echo "\$\061\060.\x32\x35"; //What is gonna print?

$strange = "hello @ hidden charecters";
echo "<pre>";

echo strpos($strange, "@"); // Reatens the postion of the given sring
if(strpos($strange, "@")){
    echo "<pre>";
    echo 'Yes, the stagnge has @ in it';
}else{
    echo "<pre>";
    echo 'No, the stagnge has\'t got @ in it';
}

$num = "12345 6789";
echo "<pre>";
$first = substr("name", 0,5); // Get a coppy of selected string 
echo $first;
echo "<pre>";
echo substr_replace($num, "xxxx", 0,5);
$name = "Abdul-rahman";
echo "<pre>";
echo substr_replace($name, "Allah", 6); // Just replace as it's clear of it's name
echo "<pre>";
echo $name;

echo "<pre>";

echo "<pre>";
echo "<pre>";
echo "<pre>";

//1.4 Processing a string one byte at a time.
// Count vowels:

$string = "Hello php World, Abdul is coming hahaha";
$vowels;
for ($i = 0, $j =  strlen($string); $i < $j ; $i++){
    if(strstr("aeiouAEIOU",$string[$i])){
        $vowels++;
    }
}
echo $vowels;

echo "<pre>";


