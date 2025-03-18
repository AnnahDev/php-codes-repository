<?php
include "db_connection.php";
$sql= "DELETE from users where student_id=". $_GET['id'];
$results= $connection->query($sql);
if($results=== true){
    echo "deleted successfully";
}else{
    echo "invalid request";
}
?>