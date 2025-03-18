<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
        <h3>Simple interest calculation</h3>
    
        <label for="capital">Enter capital</label>
        <input type="number" name="Capital"><br><br>
        <label for="interest">Enter interest rate</label>
        <input type="number" name="interest"><br><br>
        <label for="period">Enter the period</label>
        <input type="number" name="period"><br><br>
        <label for=""></label>
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

