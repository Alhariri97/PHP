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
echo "<pre>";
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

echo "<pre>";

// 1.5 Reversing a string by word or byte:
echo "<pre>";
echo $string;
echo "<pre>";
echo strrev($string);
echo "<pre>";
$words = explode( " ",$string); // break the string into words to an array
$words = array_reverse($words); // revers the array
$str = implode(" ", $words); // rebuild the string!
echo $str;
echo "<pre>";
$reversed_s = implode(" ", array_reverse(explode(" ", $string))); // same as $str
echo $reversed_s;
echo "<pre>";
// 1.7 Controlling case:
echo ucfirst($string);
echo "<pre>";
echo lcfirst($string);
echo "<pre>";
echo strtolower('<A HREF= "ONE.PHP"> ONE </A> ');
echo "<pre>";
echo strtoupper("hello world");
echo "<pre>";
echo ucwords($string);
echo "<pre>";
// 1.8 Interpolating Functions and expressions within string:
echo "the string ". $string ." is " . strlen($string) . " characters long.";
echo "<pre>";
echo date_default_timezone_get();

echo "<pre>";
date_default_timezone_set('UTC');
echo date_default_timezone_get();
echo "<pre>";

print <<<END
Right now , the time 
is 
END;
echo date('l \t\h\e jS');
print <<<END

But tomorrow is 
END;
$tomorrow = new DateTime('tomorrow');
echo $tomorrow->format('l \t\h\e jS');
echo "<pre>";
// 1.9 Trimming blanks from a string:
echo trim("        Abdul       ");
echo "<pre>";
echo ltrim("     php ");
echo "<pre>";
echo rtrim("       php     ");
echo "<pre>";
echo trim(" ...  .. php    ...", ". ");
echo "<pre>";
// 1.10 Generating comma separated data:
// Note it's not about the file handleing funciotns so it's alright 
// if i did not get what is going on with the files funcs 

echo "<pre>";
$sales = array( array("Northeast", "2005-01-01", "2005-02-01", 12.54),
                array("Northwest", "2005-01-01", "2005-02-01", 546.33),
                array("Northwest", "2005-01-01", "2005-02-01", 276.90),
                array("Northwest", "2005-01-01", "2005-02-01", 120.03),
                array("All Regions", "--", "--", 39.54));
$fh = fopen("sales.csv", "w") or die("Can't open sales.csv"); // CSV comma Separated Data
foreach($sales as $sales_line){
    if(fputcsv($fh, $sales_line) === false){ // Function PUT CSV > fputcsv
        die("can't write CSV line");
    }
}
fclose($fh) or die("cna't close sales.csv");
// if gave an error says "Failed to open stream: Permission denied in /opt/lampp/htdocs/..."
// chnage the file permissions:  sudo chmod -R 777 /path/to/directory
// if all's good now a file with a name sales.csv should be created.
echo "<pre>";
// Now letes print the csv formatted using php://output
$fh =  fopen('php://output', 'w');
foreach($sales as $sales_line){
    if(fputcsv($fh, $sales_line) === false){ // Function PUT CSV > fputcsv
        die("can't write CSV line");
    }
}
fclose($fh);
// Output the screen should be:
// Northeast,2005-01-01,2005-02-01,12.54
// Northwest,2005-01-01,2005-02-01,546.33
// Northwest,2005-01-01,2005-02-01,276.9
// Northwest,2005-01-01,2005-02-01,120.03
// "All Regions",--,--,39.54
echo "<pre>";
// Finally istaed of writing to the file or
// printing the data out let's separate them with a comma.
ob_start();
$fh =  fopen('php://output', 'r') or die("can't open php://output");
foreach($sales as $sales_line){
    if(fputcsv($fh, $sales_line) === false){ // Function PUT CSV > fputcsv
        die("can't write CSV line");
    }
}
fclose($fh) or die("Can't close php://output");
$output = ob_get_contents();
ob_end_clean();
echo "<pre>";
echo $output;
echo "<pre>";

$arrayOfLines = explode( "\n",$output); // break the string into words to an array
$JoinedArray = implode(",", $arrayOfLines); // rebuild the string!
echo $JoinedArray;

echo "<pre>";
// Parsing comma separated data

$fp = fopen("sales.csv", "r") or die("can't open file");
echo " <table> \n";
while($csv_line = fgetcsv($fp)){
    echo ' <tr> ';
    for($i = 0 , $j = count($csv_line); $i < $j ; $i++){
        echo '<td>';
        echo htmlentities($csv_line[$i]);
        echo ' </td> ';
    }
    echo "</tr> \n";
}
echo "</table>\n";
fclose($fp) or die("can't close file");
echo "<pre>";
echo "...............";
echo "<pre>";
echo readfile("file.txt");
echo "<pre>"; 
$array = explode(" ", "Hello there, we are learning today , PHP");
print_r($array);
$array1 = preg_split("/\s/", "Hello there, we are learning today , PHP");
// preg_split for regx, there was a split method but not anymore.
print_r($array1);

echo "<pre>"; 
// 1.15 Wrapping text
$text = "Four score and seven years ago our fathers brought forth on this continient anew nation, conceived in liberty and dedicated to the proposition that all men are created equal";
echo "<pre>\n". wordwrap($text,30) ."\n</pre>"; 
// it will wrap the lines to 30 chrs in line!
echo "<pre>"; 
$text = "Four score and seven years ago our fathers brought forth on this continient anew nation, conceived in liberty and dedicated to the proposition that all men are created equal";
echo "<pre>\n". wordwrap($text,30, "\n\n") ."\n</pre>"; 
// the saperator will be two new lines!
echo "<pre>"; 
// 1.16 Storing binary data in strings!
echo "<pre>"; 
$packed = pack('S4', 1997, 100, 0101, 2);
$nums = unpack("S4",$packed);
print_r($nums);
// That's shit, for some reason 0101 becomes 65 !
echo "<pre>"; 

echo "<pre>";  