<?php
//Write a PHP script to see if the specified year is a leap year or not.
$my_year = 2012;



if ($my_year % 400 == 0)
    print("It is a leap year<br>");
else if ($my_year % 100 == 0)
    print("It is not a leap year<br>");
else if ($my_year % 4 == 0)
    print("It is a leap year<br>");
else
    print("It is not a leap year<br>");



//Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.



$Tem = 25;

if ($Tem < 20) {

    echo "Winter";
} else {

    echo "summer <br>";
}





//Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.







$var1 = 2;
$var2 = 2;

if ($var1 == $var2) {
    echo ($var1 + $var2) * 3;
} else {
    echo ($var1 + $var2);
}


//Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false




$Num1 = 20;
$Num2 = 20;


if ($Num1 + $Num2 == 30) {
    print 30;
} else {
    print "<br>false";
}



//Write in PHP script to check if the given positive number is a multiple of 3.


$multible3 = 30;

if ($multible3 > 0 && $multible3 % 3 == 0) {
    echo "true";
} else {
    echo "false";
}






//Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.


$withinRange = 50;

for ($i = 20; $i <= 50; $i++) {
    if ($withinRange == $i) {
        echo "<br>True";
    }
}








//Write PHP script to find the largest number between the three integers





$array = array(1, 2, 3, 2, 7, 10, 2);
$highest = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $highest) {
        $highest = $array[$i];
    }
}

echo "<br>$highest";








// Write PHP script to calculate the monthly electricity bill according to these rules

// For first 50 units – 2.50 JOD/Unit
// For next 100 units – 5.00 JOD/Unit
// For next 100 units – 6.20 JOD/Unit
// For units above 250 – 7.50 JOD/Unit



$units = 200;
$Total = 0;
if ($units <= 50) {
    $Total = $units * 2.5;
} else if ($units <= 150) {
    $Total = 50 * 2.5 + ($units - 50) * 5;
} else if ($units <= 250) {
    $Total = 50 * 2.5 + 100 * 5 + ($units - 150) * 6.2;
} else if ($units > 250) {
    $Total = 50 * 2.5 + 100 * 5 + 100 * 6.2 + ($units - 250) * 7.5;
}

echo "<br> $Total<br>";





//Write php script to make a calculator, the calculator should contain the four main operations 


$operator = "+";
$firstValue = 2;
$secondValue = 2;

switch ($operator) {
    case '+':
        echo  $firstValue + $secondValue;
        break;

    case '-':
        echo  $firstValue - $secondValue;
        break;

    case '*':
        echo $firstValue * $secondValue;
        break;

    case '/':
        echo  $firstValue / $secondValue;
        break;
    default:
        echo "<br> please enter a valid operator";
        break;
}













//Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

$age = 12;
if ($age >= 18) {
    echo "<br> eligible";
} else {
    echo "<br> not eligible";
}




// Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’




$gradeTotal = 0;
$gradeAvg;
$gradesArray = array(100, 86, 95, 90, 100, 94, 79, 92, 90);

foreach ($gradesArray as $grade) {
    $gradeTotal += $grade;
}

$gradeAvg = $gradeTotal / count($gradesArray);

if ($gradeAvg < 60) {
    echo "<br>F, try harder";
} else if ($gradeAvg < 70) {
    echo "<br>D";
} else if ($gradeAvg < 80) {
    echo "<br>C";
} else if ($gradeAvg < 90) {
    echo "<br>B";
} else if ($gradeAvg < 100) {
    echo "<br>A";
}






//Write a script to generate the following paragraph 

$colors = array('white', 'green', 'red');

echo "<br>The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";



// Write a PHP script that will display the colors as unordered list :


$colors2 = array('white', 'green', 'red');

echo "<br><ul> 
<li>$colors2[0]

<li>$colors2[1]

<li>$colors2[2]
";







// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 



$cities = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid");

foreach ($cities as $country => $city) {
    echo "<br> The capital of $country is $city";
}


//Write a PHP script to display the first element of the above array. 
$colors3 = array(4 => 'white', 6 => 'green', 11 => 'red');

echo "<br><br>$colors3[4]";


//Write a PHP script that inserts a specific new item in an array in any position.


$Array = array(1, 2, 3, 4, 5);
// $Location= 4;
// $NewItem='$';

// array_splice(src_array, start_index, length, replace_array)
array_splice($Array, $Array[2], 0, '$');



echo "<br>";
var_dump($Array);

//Write a PHP script to sort the following associative array depending on the key value [asc] : 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);
echo "<br>";

var_dump($fruits);

//Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 




function temp(...$tem)
{
    $SUM = 0;
    $i = 0;
    $ArrayAscending = [];
    foreach ($tem as $value) {
        $SUM += $value;
        $i++;
        array_push($ArrayAscending, $value);
    }
    asort($ArrayAscending);
    $lowestTemp = '';
    for ($x = 0; $x < 7; $x++) {
        $lowestTemp = "{$lowestTemp} {$ArrayAscending[$x]},";
    }

    $highestTem = '';
    for ($z = $i - 1; $z >= ($i - 7); $z--) {
        $highestTem = "{$highestTem} {$ArrayAscending[$z]},";
    }

    echo   "<br>List of seven lowest temperatures:" . $lowestTemp .   "<br>List of seven highest temperatures:" . $highestTem .   "<br>Average Tempretaures is:" . $SUM / $i;
}


echo "<br>" . temp(5, 6, 6, 4, 8, 8, 10, 50, 40);






//functions start from here






//Write a PHP script to check if the inserted number is a prime number 




$isPrime = 7;


function prime($isPrime)
{
    for ($i = 2; $i < $isPrime; $i++) {
        if ($isPrime % $i == 0) {
            return "isnt a Prime number";
        }
    }
    return "is a prime number";
}
echo "<br>";
echo prime($isPrime);

//Write a PHP script to reverse a string 





echo "<br>";

$revstring = "Jafar";

echo strrev($revstring);




// Write a PHP script to check if the all string characters are lower cases

$testcase = "Jafar";

if (ctype_lower($testcase)) {
    echo "<br> all letters are lowercase\n";
} else {
    echo "<br>Not all letters are lowercase\n";
}



//Write a PHP function to swap to variables?


$firstVar = 5;
$secondVar = 'Jafar';

function swap($var1, $var2)
{
    $newVar = $var1;
    $var1 = $var2;
    $var2 = $newVar;

    return "The firstVar = $var1\n" . "The secondVar = $var2\n";
}


echo "<br>" . swap($firstVar, $secondVar);






//Write a PHP function to check if a number is an Armstrong number or not ?

$armstrong = 407;

function isarmstrong($number)
{
    $Total = 0;


    for ($i = 0; $i < strlen($number); $i++) {

        $Total += pow(substr($number, $i, 1), strlen($number));
    }


    if ($Total == $number) {
        echo "<br> $number is an Armstrong number";
    } else {
        echo "<br> $number isn't an Armstrong number";
    }
}

isarmstrong($armstrong);

echo "<br>";

echo strlen(1236);

echo "<br>" . pow(2, 3);

echo "<br>";

echo substr(122, 0, 1);




//Write a PHP function that checks whether a passed string is a palindrome or not?

echo "<br>";

function checkPalindrome($str)
{

    if (strrev($str) == $str) {
        echo "<br> $str is a palindrome string";
    } else {
        echo "<br> $str isn't a palindrome string";
    }
}

checkPalindrome("evacaniseebeesinacave");

// echo strrev("evacaniseebeesinacave");



//Write a PHP function to remove duplicates from an array ?
$duplicatedArray = [1, 1, 2, 1, 5, 4, 9, 5];
function removeDuplicates($array)
{
    var_dump(array_unique($array));
}
echo "<br>";
removeDuplicates($duplicatedArray);



$array20 = [1, 1, 2, 1, 5, 4, 9, 5];
function &dublicateRem($arr)
{

    $result = array();
    foreach ($arr as $key => $value) {
        if (!in_array($value, $result))
            $result[$key] = $value;
    }
    return $result;
}

echo "<br>";
var_dump(dublicateRem($array20));
echo "<br>";







//Write a PHP program to merge the following two arrays. 


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$MergedArray = array_merge($array1, $array2);
print_r($MergedArray);

echo "<br>";







//Write a PHP function to change the following array's and convert all the strings to upper case. 

$upperCaseArray = array("Jafar", "banana");

foreach ($upperCaseArray as &$value)
    $value = strtoupper($value);

print_r($upperCaseArray);




//Write a PHP function to change the following array's and convert all the strings to lower case. 

echo "<br>";

$lowerCaseArray = array("JafFAAar", "banaBBFnaAA");

foreach ($lowerCaseArray as &$value)
    $value = strtolower($value);

print_r($lowerCaseArray);




// Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

for ($i = 200; $i <= 250; $i++) {

    if ($i % 4 == 0) {
        echo "<br>" . $i;
    }
}

echo "<br>";






//Write a PHP script to get the shortest/longest string length from an array. 



$data = array(
    "163",
    "630",
    "43",
    "924",
    "4",
    "54"
);

$lengths = array_map('strlen', $data);

echo "The shortest is " . min($lengths) .
    ". The longest is " . max($lengths);

echo "<br>";



//Write a PHP script to generate unique random 10 numbers within a specific range. 

echo (rand() . "<br>");
echo (rand(11, 20));



//Write a PHP script that returns the lowest integer in the array  that is not 0. 

//Sample Input: $array1 = array( 2, 0, 10, 12, 6) 

$lowestNumberisnt0 = array(2, 0, 10, 12, 6);

function removearrayele($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] == 0) {
            unset($arr[$i]);
        }
    }
    return $arr;
}
echo "<br>";
var_dump(removearrayele($lowestNumberisnt0));
echo "<br>" . min((removearrayele($lowestNumberisnt0)));





//------------------------------------LOOPS----------------------------------//

echo "<br>";

//Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 

for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        echo $i;
        break;
    } else {
        echo "$i-";
    }
}



//Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "<br>$total";




//Create a script to generate the following pattern, using the nested for loop. 

// Expected Output:

// A A A A A 
// A A A B B 
// A A C C C 
// A D D D D 
// E E E E E
echo "<br>";
echo "<br>";


$row = 1;
$counteachrow = 1;

for ($i = 1; $i <= 25; $i++) {

    if ($i == 26) {
        break;
    }

    echo

    $row == 5
        ? "E "
        : ($row == 4 && $counteachrow >= 3
            ? 'D '
            : ($row == 3 && $counteachrow >= 4
                ? 'C '
                : ($row == 2 && $counteachrow >= 5
                    ? 'B '
                    : 'A ')));


    if ($i % 5 == 0) {
        echo "<br>";
        $row += 1;
        $counteachrow = 1;
    }
    $counteachrow++;
}

echo "<br>";


//Create a script to generate the following pattern, using the nested for loop. 

// Expected Output:

// 1 1 1 1 1 
// 1 1 1 2 2 
// 1 1 3 3 3 
// 1 4 4 4 4 
// 5 5 5 5 5
$row = 1;
$counteachrow = 1;

for ($i = 1; $i <= 25; $i++) {

    if ($i == 26) {
        break;
    }

    echo

    $row == 5
        ? "5 "
        : ($row == 4 && $counteachrow >= 3
            ? '4 '
            : ($row == 3 && $counteachrow >= 4
                ? '3 '
                : ($row == 2 && $counteachrow >= 5
                    ? '2 '
                    : '1 ')));


    if ($i % 5 == 0) {
        echo "<br>";
        $row += 1;
        $counteachrow = 1;
    }
    $counteachrow++;
}






//Create a script to generate the following pattern, using the nested for loop. 


// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5
$row = 1;
$counteachrow = 1;

echo "<br>";

for ($i = 1; $i <= 25; $i++) {

    if ($i == 26) {
        break;
    }

    echo

    $row == 5 && $counteachrow == 5
        ? "5 "
        : ($row == 4 && $counteachrow == 4
            ? '4 '
            : ($row == 3 && $counteachrow == 3
                ? '3 '
                : ($row == 2 && $counteachrow == 2
                    ? '2 '
                    : ($row == 1 && $counteachrow == 1
                        ? '1 '
                        : '0 '))));


    if ($i % 5 == 0) {
        echo "<br>";
        $row += 1;
        $counteachrow = 0;
    }
    $counteachrow++;
}



//Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.


function factorial($number)
{
    $Total = 1;
    for ($i = 1; $i <= $number; $i++) {
        $Total *= $i;
    }
    return $Total;
}

echo "<br>" . factorial(5);








// Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …

/* Print fiboancci series upto 12 elements. */

echo "<br>";


$num = 8;
function series($num)
{
    if ($num == 0) {
        return 0;
    } else if ($num == 1) {
        return 1;
    } else {
        return (series($num - 1) + series($num - 2));
    }
}
for ($i = 0; $i < $num; $i++) {
    echo series($i);
    echo "\n";
}

//Write a program which will count the "c" characters in the text "Orange Coding Academy". 

$stringOrange = "Orange Coding Academy";
echo $stringOrange[0];

function countC($str)
{
    $counter = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $str[$i] == 'c' || $str[$i] == 'C'
            ? $counter++
            : 'do nothing';
    }
    return $counter;
}

echo "<br>" . countC($stringOrange);

?>
<!-- //Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag.  -->


<table align="left" border="1" cellpadding="3" cellspacing="1">

    <?php

    echo "<br>";

    for ($row = 1; $row <= 6; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 5; $col++) {
            echo "<td>$row * $col = " . $row * $col . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";



    ?>

</table>

<?php
// Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


for ($i = 1; $i <= 50; $i++) {
    echo

    $i % 5 == 0 && $i % 3 == 0
        ? " FizzBuzz "
        : ($i % 5 == 0
            ? " Buzz "
            : ($i % 3 == 0
                ? " Fizz "
                : " $i "));
}


//According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:
// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15
echo "<br>";


function FloydsTriangle($n)
{
    $val = 1;

    // loop for number of lines
    for ($i = 1; $i <= $n; $i++) {
        // echo
        // $i == 1
        //     ? str_repeat('&nbsp;', 10)
        //     : ($i == 2
        //         ? str_repeat('&nbsp;', 8)
        //         : ($i == 3
        //             ? str_repeat('&nbsp;', 6)
        //             : ($i == 4
        //                 ? str_repeat('&nbsp;', 4)
        //                 : ($i == 5
        //                     ? str_repeat('&nbsp;', 0)
        //                     : ''))));
        // loop for number of elements
        // in each line
        for ($j = 1; $j <= $i; $j++) {

            echo ($val . " ");

            $val++;
        }
        echo "<br>";
    }
}

$n = 5;
FloydsTriangle($n);


// Write a PHP program to print the following pattern. 

// Expected Output:

//      A 
//     A B 
//    A B C 
//   A B C D 
//  A B C D E 
//   A B C D 
//    A B C 
//     A B 
//      A


echo "<br>";
echo "<br>";

echo "<br>";

function diamondPattern($row)
{
    for ($i = 1; $i <= $row; $i++) {



        echo
        $i == 1
            ? str_repeat('&nbsp;', 10)
            : ($i == 2
                ? str_repeat('&nbsp;', 8)
                : ($i == 3
                    ? str_repeat('&nbsp;', 6)
                    : ($i == 4
                        ? str_repeat('&nbsp;', 4)
                        : ($i == 5
                            ? str_repeat('&nbsp;', 2)
                            : ''))));
        for ($j = 1; $j <= $i; $j++) {
            echo
            $i == 1
                ? 'A '
                : ($i >= 2 && $j == 2
                    ? 'B '
                    : ($i >= 3 && $j == 3
                        ? 'C '
                        : ($i >= 4 && $j == 4
                            ? 'D '
                            : ($i >= 5 && $j == 5
                                ? 'E '
                                : 'A '))));
            // echo $j;

        }
        echo "<br>";
    }



    //second loop


    for ($i = $row - 1; $i >= 0; $i--) {



        echo
        $i == 1
            ? str_repeat('&nbsp;', 10)
            : ($i == 2
                ? str_repeat('&nbsp;', 8)
                : ($i == 3
                    ? str_repeat('&nbsp;', 6)
                    : ($i == 4
                        ? str_repeat('&nbsp;', 4)
                        : ($i == 5
                            ? str_repeat('&nbsp;', 2)
                            : ''))));
        for ($j = 1; $j <= $i; $j++) {
            echo
            $i == 1
                ? 'A '
                : ($i >= 2 && $j == 2
                    ? 'B '
                    : ($i >= 3 && $j == 3
                        ? 'C '
                        : ($i >= 4 && $j == 4
                            ? 'D '
                            : ($i >= 5 && $j == 5
                                ? 'E '
                                : 'A '))));
            // echo $j;

        }
        echo "<br>";
    }
}

diamondPattern(5);






//------------------------------------------------------------------------------------------------------------------





$str = 'jafar';
function countR($str)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == 'r') {
            $count++;
        }
    }
    echo "<br>";

    echo $count;
}
countR($str);

?>