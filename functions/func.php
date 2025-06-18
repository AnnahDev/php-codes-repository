<?php
function Interest($capital, $interest, $period) {
    
    if ($capital <= 0 || $interestRate <= 0 || $period <= 0) {
        return "All values must be greater than zero.";
    }

    
    $simpleInterest = ($capital * $interestRate * $period) / 100;

    return "The Simple Interest is: " . $simpleInterest;
}


$capital = 1000;       
$interestRate = 5;    
$period = 2;         

echo calculateSimpleInterest($capital, $interestRate, $period);
?>
