<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
$student_id = $_POST['student_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['e_mail'];
$password = $_POST['password'];
$stmt =
"INSERT INTO users(student_id,first_name,last_name,e_mail,password) VALUES
('$student_id'
,
'$first_name'
,
'$last_name'
,
'$email'
,
'$password'
)";
$result = $connection->query($stmt);
if ($result == true) {
    echo 'New record created successfully.';
    } else {
    echo 'Error:'.$stmt.'<br>'.$connection->error;
    }
    $connection->close();
    }
    ?>
    <html>
    <a class=
    "btn btn-info" href=
    "signup.html"><br><br>Back</a>
    <a class=
    "btn btn-info" href=
    "read.php"><br><br>View record from database</a>
    </html>