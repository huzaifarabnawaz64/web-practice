<?php 
echo "<h1>this is function on php</h1>";

function processmarks($marks){
  $sum=0;
  foreach ($marks as  $value) {
      $sum+=$value;
    }
    return $sum;
}

function avgmarks($marks){
  $sum=0;
  $i=1;
  foreach ($marks as  $value) {
      $sum+=$value;
      $i++;
    }
    return $sum/$i;
}

$sania=[100,100,100,100,100,20];
// $summarks=processmarks($sania);
$summarks=avgmarks($sania);
echo "total number of sania  is $summarks  the grde is A+<br>";

$huzaifa=[90,90,20,40,30,100];
// $summarkshr=processmarks($huzaifa);
$summarkshr=avgmarks($huzaifa);
echo "total marks of student  of grade  $summarkshr the percent tage";
?>