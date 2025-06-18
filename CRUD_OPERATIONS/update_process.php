<?php
include "db_connection.php";
$sql="UPDATE users SET first_name='$_POST[first_name]', last_name='$_POST[last_name]', password='$_POST[password]', e_mail='$_POST[e_mail]' WHERE student_id=$_POST[student_id]";
$results= $connection->query($sql);
if($results=== true){
    echo "updated successfully";
}else{
    echo "invalid request";
}
header("read.php");
?>