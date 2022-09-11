<?php
//Write a PHP script to see if the specified year is a leap year or not.
function year_check($my_year)
{
    if ($my_year % 400 == 0)
        print("It is a leap year");
    else if ($my_year % 100 == 0)
        print("It is not a leap year");
    else if ($my_year % 4 == 0)
        print("It is a leap year");
    else
        print("It is not a leap year");
}
$my_year = 1900;
year_check($my_year);


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

if($multible3>0 && $multible3%3 == 0) {
    echo"true";
}else {
    echo"false";

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

echo "<br> $Total";


//Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

$age=12;
if($age >= 18) {
    echo "<br> eligible";
}else {
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
