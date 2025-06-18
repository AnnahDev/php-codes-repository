

<?php
 include ("Connections.php");
 if($_SERVER['REQUEST_METHOD']==='POST'){
    print "Ready to do connections";
    $fname= $_POST['Fname'];
    $lname=$_POST['lname'];
    $address= $_POST['address'];
    $email= $_POST['email'];
    $pass= $_POST['pss'];
 $sql="INSERT INTO users( fname, lname, adress, email, password)
     VALUES ('$fname', '$lname', '$address', '$email', '$pass')";
 if ($con->query( $sql) === TRUE) {
     echo "Logged in successfully";
 }else{
     echo "not logged in";
 }
 
// echo"<a class="btn btn-info" href="signup.html"><br><br>Back</a>";
// echo "<a class="btn btn-info" href="read.php"><br><br>View record from database</a>";

 }
?>
<button><a href="read.php">View records</a></button>