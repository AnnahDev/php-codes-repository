<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="capital" >Enter capital</label>
        <input type="text" name="capital" id="capital"><br>
        <label for="capital" >Enter interest</label>
        <input type="text" name="interest" id="interest"><br>
        <label for="capital" >Enter period</label>
        <input type="text" name="period" id="period"><br>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $capital=$_POST['capital'];
    $interest=$_POST['interest'];
    $period=$_POST['period'];
    $simpleint;
    function findSimpleInt($capital,$period,$interest){
        return ($capital*$period*$interest)/100;
    }
    $simpleint=findSimpleInt($capital,$period,$interest);
    echo "the simple interest is :$simpleint";
}
?>