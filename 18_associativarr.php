<?php

echo "<h1>this is associative arrays in php </h1><br>";

// this is index array  

// $arr=array("this","that","what");
// echo "$arr[0] <br>";
// echo "$arr[1] <br>";
// echo "$arr[2] <br>";

// assiciative arrayas 

$fav=array('huzaifa'=>'any',
'sania'=>'black',
'fatima'=>'green',
8=> 'blue',
);

// use ineger is allowed in arrays


echo $fav['huzaifa'];
echo "<br>"; 
echo $fav['fatima'];
echo "<br>"; 
echo $fav[8];
echo "<br>";     

// i am using foeach loop in arrays     

foreach ($fav as $key => $value) {
    echo " name  $key and favirate color   $value";
}

?>