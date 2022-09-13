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


// $Array = array(1,2,3,4,5);
// $Location= 4;
// $NewItem='$';

// array_splice($Array,4,$NewItem);


// echo "<br>$Array";






//Write a PHP script to check if the inserted number is a prime number 




// $isPrime = 7;

// for($i = 2; $i < $isPrime; $i++) {
//        if ($isPrime%$i == 0){
//             print "isnt a Prime number";
//        }else {
//         print "is a Prime number";

//        }
// }



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
    print_r(array_unique($array));
}
echo "<br>";
removeDuplicates($duplicatedArray);
