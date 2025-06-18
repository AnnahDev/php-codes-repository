<?php
include "Connections.php";
$id = $_GET['id'];
$data = $con->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
?>

<form action="update_process.php" method= "post">
<input type="hidden" name="id" value="<?= $data['id'] ?>">
    <input type="text" name="fname" value="<?= $data['fname'] ?>" required>
    <input type="text" name="lname" value="<?= $data['lname'] ?>" required>
    <input type="text" name="adress" value="<?= $data['adress'] ?>" required>
    <input type="email" name="email" value="<?= $data['email'] ?>" required>
    <button type="submit" >Update</button>
</form>