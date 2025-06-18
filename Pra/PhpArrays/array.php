

<?php
$numbers = array("1","2","3","4","5");
 foreach($numbers as $value) {
    echo "Value is = $value </br>";
 } 


 $foods = array("eggs","rice","sweet potatoes","beans");

$i=0;
while($i< count($foods)){
    echo  $foods[$i]."<br>";
    $i++;
}


$foods = array("eggs","rice","sweet potatoes","beans.");
for($i=0; $i<count($foods); $i++){
    echo $foods[$i] ."<br>";
}
 

$foods = array("eggs","rice","sweet potatoes","beans.");

for($i=0; $i<count($foods); $i++){
    echo $foods[$i] ."<br>";
    print_r($foods) ;
}


for($i=0; $i<count($foods); $i++){
    echo $foods[$i] ."<br>";
    var_dump($foods[2]) ;
}
if (in_array("eggs", $foods)) {
    echo "Got eggs";
}

$grades = array(
    "John" => 85,
    "Jane" => 92,
    "Dave" => 78,
    "Mary" => 90
);

foreach($grades as $student => $grade) {
    echo "$student's grade is $grade<br>";
}

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo "Peter is " . $age['Peter'] . " years old. </br>" ;

$schools =array(
    array("RCA","Nyabihu","SPE"),
    array("RCA","Nyabihu","SPE"),
    array("RCA","Nyabihu","SPE"),
    array("RCA","Nyabihu","SPE")
);
echo $schools[0][0] . " is in ".$schools[0][1] ." District";


 ?>