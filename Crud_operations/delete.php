<?php
include "connections.php";
$sql= "DELETE from users where id=". $_GET['id'];
$results= $con->query($sql);
if($results=== true){
    echo "deleted successfully";
}else{
    echo "invalid request";
}
?>
