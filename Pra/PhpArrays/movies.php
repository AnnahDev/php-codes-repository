<?php
$movie[0]="Shaolin Monk";
$movie[1]="Drunken Master";
$movie[2]="American Ninja"; Output:
$movie[3]="Once upon a time in China";
$movie[4]="Replacement Killers";
echo $movie[3];
$movie[3] = " Eastern Condors";
echo $movie[3]; 
echo "<br>";



$numbers = array(1,2,3,4,5,6,7,8,9,10);
foreach($numbers as $values){
    echo" value is =$values <br/>";

}
$numbers[0]= "five";
$numbers[1]= "four";

foreach($numbers as $values){
    echo "Value is $values <br/>";
}



?>






