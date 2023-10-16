<?php
"question1 what is output";
"1- error call to undefined function" ;
"2-null";
"3-true";

"question2 write code";
"1";
echo "fibonacci series";
echo "<br>";
"2";
$year = 2023;
if ($year % 400 == 0) {
   echo $year." is a leap year.";
} elseif ($year % 100 == 0) {
   echo $year." is not a leap year.";
} elseif ($year % 4 == 0) {
   echo $year." is a leap year.";
} else {
   echo $year." is not a leap year.";
}
echo "<br>";

"3";

$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n";


echo "<br>";
"4";
for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
       if ($j == 1) {
         echo str_pad($i*$j, 3, " ", STR_PAD_LEFT);
       } else {
         echo str_pad($i*$j, 3, " ", STR_PAD_LEFT);
       }
    }
    echo "<br>";
  }
  echo "<br>";
  "5";
  function remove_duplicates_list($list1) {
    $nums_unique = array_values(array_unique($list1));
    return $nums_unique ;
  }
  $nums = array(7,7,2,2,3,4,5,5);
  print_r(remove_duplicates_list($nums));

  echo "<br>";

  "question1 true or false";
  "1-false";
  "2-true";
  "3-false";
  "4-true";
  "5-true";