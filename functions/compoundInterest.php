<?php

function calculateCompoundInterest($principal, $rate, $timesCompounded, $timeInYears) {
    if ($principal <= 0 || $rate <= 0 || $timesCompounded <= 0 || $timeInYears <= 0) {
        return "All inputs must be greater than zero.";
    }

    $finalAmount = $principal * pow((1 + ($rate / $timesCompounded)), $timesCompounded * $timeInYears);

    $compoundInterest = $finalAmount - $principal;

    return round($compoundInterest, 2);
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $principal = isset($_POST['principal']) ? (float)$_POST['principal'] : 0;
    $rate = isset($_POST['rate']) ? (float)$_POST['rate'] : 0;
    $timesCompounded = isset($_POST['timesCompounded']) ? (int)$_POST['timesCompounded'] : 0;
    $timeInYears = isset($_POST['timeInYears']) ? (float)$_POST['timeInYears'] : 0;

    $result = calculateCompoundInterest($principal, $rate / 100, $timesCompounded, $timeInYears);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Interest Calculator</title>
</head>
<style>
    button{
        color:black;
        background-color: green;
        padding:3px;

    }
    h1{
        text-decoration:underline;
        color:green;

    }
    form{
        color:black;
        
    }

</style>
<body>
    <h1>Compound Interest Calculator</h1>
    <form action="" method="post">
        <label for="principal">Principal Amount:</label>
        <input type="number" name="principal" id="principal" step="0.01" min="0.01" required><br><br>

        <label for="rate">Annual Interest Rate (%):</label>
        <input type="number" name="rate" id="rate" step="0.01" min="0.01" required><br><br>

        <label for="timesCompounded">Times Compounded Per Year:</label>
        <input type="number" name="timesCompounded" id="timesCompounded" min="1" required><br><br>

        <label for="timeInYears">Time in Years:</label>
        <input type="number" name="timeInYears" id="timeInYears" step="0.01" min="0.01" required><br><br>

        <button type="submit" >Calculate</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (is_numeric($result)) {
            echo "<h2>The Compound Interest is: $" . number_format($result, 2) . "</h2>";
        } else {
            echo "<h2>Error: $result</h2>";
        }
    }
    ?>
</body>
</html>
