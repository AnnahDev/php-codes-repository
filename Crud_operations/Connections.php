<?php
$server ="localhost";
$username="root";
$Password="";
$DB ="student_mis";

$con = new  mysqli($server, $username, $Password,$DB);
if(!$con){
    echo " OOpps connection  failed";

}else{
    echo " Connection done successfuly!";
}

?>
