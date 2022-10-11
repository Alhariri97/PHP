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

// look and say sequence:

function lookandsay($s){
    //initialize the reutrn value to the empty string
    $r = '';
    // $m holds the character we're counting, initialize for the first
    // character in the string
    $m = $s[0];
    // $n is the numver of $m's we've seen, initialize to 1;
    $n = 1; 
    for($i = 1, $j = strlen($s); $i < $j; $i++){
        // if this character is the same as the last one 
        if($s[$i] == $m){
            // increment the count of theis character 
            $n++;
        } else{
            // otherwise, add the count and character to the return value.
            $r .= $n.$m;
            // set the character we're looking for to the current one .
            $m = $s[$i];
            // and reset the count to 1.
            $n = 1;
        }
    }
    // return thebuilt up string as well as sthe last cound character 
    return $r.$n.$m;
}
for ($i = 0, $s = 1; $i < 10; $i++){
    $s = lookandsay($s);
    echo "$s <br/>\n";
}
// OUTPUT
// 1 
// 11 
// 21 
// 1211 
// 111221 
// 312211 
// 13112221 
// 1113213211 
// 31131211131221 
// 13211311123113112211 
