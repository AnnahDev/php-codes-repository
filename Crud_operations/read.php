<?php
include 'connections.php';
$sql = 'SELECT * FROM users';
$result = $con->query($sql);
?>
<html>
<head>
<title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container"><h2>users</h2>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody> 
<?php
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
 ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['adress']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr> 
<?php }
}
?> </tbody>
</table>

 </div> 
</body>
</html>

