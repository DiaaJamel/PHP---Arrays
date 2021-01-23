<?php
// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script that display the following string -
// "The memory of that scene for me is like a frame of film forever frozen at that
// moment: the red carpet, the green lawn, the white house, the leaden sky. The
// new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $color variables .

$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that
moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
new president and his first lady. - Richard M. Nixon";
echo "<br/><br/>";


// ----------------------
// $color = array('white', 'green', 'red'')
// Write a PHP script that will display the colors in the following order :
// Output :
// white, green, red,
// ● green
// ● red
// ● white
$colors = array('white', 'green', 'red');
echo "$colors[0], $colors[1], $colors[2]";
echo "<ul>";
foreach ($colors as $list){
    echo "<li>$list</li>";
}
echo "</ul>";
echo "<br/><br/>";


// ----------------------
// 3. $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
// "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
// "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
// "Greece" => "Athens", "Ireland"=>"Dublin");
// Create a PHP script which displays the capital and country name from the above
// array $cities. Sort the list by the capital of the cSample Output :
// The capital of Netherlands is Amsterdam
// The capital of Greece is Athens
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens");

// for($i=0 ; $i<= count($cities) ; $i++){
//     foreach($cities as $capitals){
//         echo "<p>The capital of $cities[$i] is $capitals</p>";
//     }
// }
foreach($cities as $city => $capitals){
    echo "<p>The capital of $city is $capitals</p>";
}

echo "<br/><br/>";


// ----------------------
// 4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer
// keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

$x = array(1, 2, 3, 4, 5);
// $y = array_push($x);
var_dump($x);
unset($x[4]);
print_r(array_values($x)) ;
echo "<br/><br/>";

// ----------------------
// 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white

$color5 = array(4 => 'white', 6 => 'green', 11=> 'red');
// var_dump($color5);
echo $color5[4];
echo "<br/><br/>";



// ----------------------
// 7. Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array :
// 1 2 3 4 5
// After inserting '$' the array is :
// 1 2 3 $ 4 5

$numbers7 = array('1', '2', '3', '4', '5');
// solution1:
array_push($numbers7, 5, "diaa");
print_r($numbers7);
echo "<br/><br/>";

// solution2:
$replace = "#";
array_splice($numbers7, 3,0,$replace);
print_r($numbers7);
echo "<br/>";
foreach($numbers7 as $numberArray){
    echo $numberArray;
}

echo "<br/><br/>";

// ----------------------
// 8. Write a PHP script to sort the following associative array :
// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
$data = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// a) ascending order sort by value
asort($data);
echo "<b>ascending order sort by value</b><br/>";
foreach($data as $dataKey => $dataValue){
    echo "My name is $dataKey and I'm $dataValue years old"."<br/>";
}
echo "<br/><br/>";

// b) ascending order sort by Key
ksort($data);
echo "<b>ascending order sort by Key</b><br/>";
foreach($data as $dataKey => $dataValue){
    echo "My name is $dataKey and I'm $dataValue years old"."<br/>";
}
echo "<br/><br/>";

// c) descending order sorting by Value
arsort($data);
echo "<b>descending order sort by value</b><br/>";
foreach($data as $dataKey => $dataValue){
    echo "My name is $dataKey and I'm $dataValue years old"."<br/>";
}
echo "<br/><br/>";
// d) descending order sorting by Key
krsort($data);
echo "<b>descending order sort by key</b><br/>";
foreach($data as $dataKey => $dataValue){
    echo "My name is $dataKey and I'm $dataValue years old"."<br/>";
}

echo "<br/><br/>";
// ----------------------
// 9. Write a PHP script to calculate and display average temperature, five lowest
// and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
// 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6
// List of seven lowest temperatures : 60, 62, 63, 63, 64,
// List of seven highest temperatures : 76, 78, 79, 81, 85,
$temperatures = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$tempArray = explode(',', $temperatures);
// print_r($tempArray);
$tempTotal = 0 ;
foreach($tempArray as $tempCount){
    $tempTotal = $tempTotal + $tempCount;
}
echo $tempTotal."<br/>";
$tempLen = count($tempArray);
$tempAvg = $tempTotal/$tempLen;
echo "Average temperatures = $tempAvg"."<br/>";

echo "List of seven lowest temperatures :";
asort($tempArray);
for($i = 1 ; $i<=7 ; $i++){
    echo $tempArray[$i];
}

echo "<br/><br/>";


// ----------------------
// 11. Write a PHP program to merge the following two arrays.
// Sample arrays :
// $array1 = array(array(70,40), array(25, 45));
// $array2 = array("example", "com");
// Expected Output :
// Array
// (
// [0] => Array
// (
// [0] => example
// [1] => 70
// [2] => 40
// )
// [1] => Array
// (
// [0] => com
// [1] => 25
// [2] => 45
// )
// )
$array1 = array(array(70,40), array(25, 45));
$array2 = array("example", "com");

$result = array_merge($array1, $array2);
print_r($result);
echo "<br/><br/>";



// ----------------------
// 12. Write a PHP function to change the following array's all values to upper or
// lower case.
// Sample arrays :
// $color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// Expected Output :
// Values are in lower case.
// Array ( [A] => blue [B] => green [c] => red )
// Values are in upper case.
// Array ( [A] => BLUE [B] => GREEN [c] => RED )

$color12 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "Values are in lower case."."<br/>";
$lowercaseArray = array_map('strtolower', $color12);
print_r($lowercaseArray);
echo "<br/>";
echo "Values are in lower case."."<br/>";
$lowercaseArray = array_map('strtoupper', $color12);
print_r($lowercaseArray) ;
echo "<br/><br/>";

// ----------------------
// 13. Write a PHP script which displays all the numbers between 200 and 250 that
// are divisible by 4.
// Note : Do not use any PHP control statement.
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248

$range = range(200, 250, 4);
print_r($range);

echo "<br/>".implode(",",$range);
echo "<br/><br/>";


// ----------------------
// 14. Write a PHP script to get the shortest/longest string length from an array.
// Sample arrays : ("abcd","abc","de","hjjj","g","wer")
// Expected Output : The shortest array length is 1. The longest array length is 4.
$array14 = array("abcd","abc","de","hjjj","g","wer");
// echo count($array14);
// echo strlen($array14[0]);
$array14New = array_map("strlen", $array14);
$min = min($array14New);
$max = max($array14New);
echo "The shortest array length is $min. The longest array length is $max.";
echo "<br/><br/>";

// ----------------------
// 15. Write a PHP script to generate unique random numbers within a range.
// Sample Range : (11, 20)
// Sample Output : 17 16 13 20 14 19 18 15 11 12
$range1 = range(11,20.1);
// echo uniqid($range1);
shuffle($range1);
foreach ($range1 as $num1) {
    echo "$num1 ";
}
echo "<br/><br/>";

// ----------------------
// 17. Write a PHP function that returns the lowest integer in the array that is not 0.
echo "<br/><br/>";

// ----------------------
// 18. Write a PHP function to floor decimal numbers with precision.
// Note: Accept three parameters number, precision, and $separator
echo "<br/><br/>";




// ----------------------
// 19. Write a PHP script to print "second" and Red from the following array.
// Sample Data :
// $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
// "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
// "holes" => array ( "First", 5 => "Second", "Third"));
$color19 = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo $color19["holes"][5];
echo "<br/>";
echo $color19["color"]["a"];
echo "<br/><br/>";



// ----------------------
// 20. Write a PHP function to sort an array according to another array acting as a
// priority list.



echo "<br/><br/>";


// ----------------------
// 24. Write a PHP script to sort an array using case-insensitive natural ordering.
?>