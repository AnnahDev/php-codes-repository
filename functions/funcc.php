

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="funcc.php" method="post">
        <h3>Simple interest calculation</h3>
    
        <label for="capital">Enter capital</label>
        <input type="float" name="capital"><br><br>
        <label for="interest">Enter interest rate</label>
        <input type="rate" name="interest"><br><br>
        <label for="period">Enter the period</label>
        <input type="float" name="period"><br><br>
        <button type="submit">Done</button>
    
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $capital = $_POST['capital'];
    $interest = $_POST['interest'];
    $period = $_POST['period'];
}


function simpleInterest($capital, $interest, $period){

    return ($capital * $interest * $period)/100; 
           
   
}
$simpleInterest = simpleInterest($capital, $interest, $period);
    echo "Your simple interest is: $simpleInterest";


?>

