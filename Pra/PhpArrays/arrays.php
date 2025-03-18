

<?php
$foods = array("eggs","rice","sweet potatoes","beans.");


if (in_array("eggs", $foods)) {
    echo "Got eggs </br>";
}


$array1 = array("a" => "green", "red", "blue", "red","kaki","orange");
$array2 = array("b" => "green", "yellow", "red","pink");
array_push($array2, "kaki","black","pink");
$result = array_diff( $array1, $array2);
print_r($result) ;
echo"<br>";
print_r($array2);
echo"<br>";
//this will print “blue” because it is not present in array2
echo "Sum =" .array_sum($array1);
echo"<br>";
?>