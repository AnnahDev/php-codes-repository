<?php
function add($num1, $num2){
    $sum = $num1+$num2;
   return $sum;
}

 $x = 34;
 $y = 67;
 $result = add($x, $y);
 echo "The sum of the numbers is " .$result ; 
echo "<br>";

  function square($number){
    $number *= $number;
    return  $number;

  }

  $number = 34;
  $result = square($number);
  echo "The square of the number is " . $result;
  
  echo "<br>";




  function factorial($n){
    if ($n == 0 || $n == 1){
        return 1;  // Return 1 instead of echoing
    } else { 
        return $n * factorial($n - 1); // Proper recursion
    }
}

$n = 4;
echo "The factorial of the number is " . factorial($n);

 ?>