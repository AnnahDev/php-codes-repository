
<?php
$server = "localhost";
$username = "root";  // Fixed: Removed extra space
$password = "";
$database = "student_MIS";
$connection = new mysqli($server, $username, $password, $database);  // Fixed: Removed extra space

if ($connection->connect_error) {  // Fixed: Proper connection check
    echo "Connection failed: " . $connection->connect_error;  // Added error details
} else {
    echo "Connection successful";  // Fixed: Corrected spelling
}
?>