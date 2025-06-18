<?php

$marks = array(1,2,3,4,5,6,7,8,9,0);
$sum = array_sum($marks);
$average = $sum / count($marks);
 sort($marks);
 $newmarks = sort($marks);
 unset($newmarks);
 echo "The avarage of the marks is ". $average;
 echo "<br>";
 echo $newmarks[0];
 ?>