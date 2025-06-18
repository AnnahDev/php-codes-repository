<?php
include "connections.php";
$sql="UPDATE users SET fname='$_POST[fname]', lname='$_POST[lname]', adress='$_POST[adress]', email='$_POST[email]' WHERE id=$_POST[id]";
$results= $con->query($sql);
if($results=== true){
    echo "updated successfully";
}else{
    echo "invalid request";
}
header("Location: read.php");
exit;
