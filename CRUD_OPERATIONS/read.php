<?php
include 'db_connection.php';
$sql =
'SELECT * FROM users';
$result = $connection->query($sql);
?>
<html>
<head>
<title>View Page</title>
<link rel=
"stylesheet"
href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
21
<body>
<div class=
"container">
<h2>users</h2>
<table class=
"table">
<thead>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>password</th>
</tr>
</thead>
22
<tbody>
<?php
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['student_id']; ?></td>
<td><?php echo $row['first_name']; ?></td>
<td><?php echo $row['last_name']; ?></td>
<td><?php echo $row['e_mail']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><a class=
"btn btn-info" href=
"update.php?id=<?php echo
$row['student_id']; ?>">Edit</a>&nbsp;<a class=
"btn btn-danger"
href=
"delete.php?id=<?php echo $row['student_id']; ?>">Delete</a></td>
</tr>
23
<?php }
}
?>
</tbody>
</table>
</div>
</body>
</html>