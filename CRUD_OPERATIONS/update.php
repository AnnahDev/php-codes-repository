<!-- <?php
include "db_connection.php";
$id = $_GET['id'];
$data = $connection->query("SELECT * FROM users WHERE student_id=$id")->fetch_assoc();
?>
<form action="update_process.php" method= "post">
<input type="hidden" name="student_id" value="<?= $data['student_id'] ?>">
    <input type="text" name="first_name" value="<?= $data['first_name'] ?>" required>
    <input type="text" name="last_name" value="<?= $data['last_name'] ?>" required>
    <input type="text" name="password" value="<?= $data['password'] ?>" required>
    <input type="email" name="e_mail" value="<?= $data['e_mail'] ?>" required>
    <button type="submit">Edit</button>
</form> -->
<?php
include "db_connection.php";

$id = $_GET['id'] ?? ''; // Ensure id is set
if (!is_numeric($id)) {
    die("Invalid ID"); // Validate input
}

$stmt = $connection->prepare("SELECT * FROM users WHERE student_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
$stmt->close();
?>

<form action="update_process.php" method="post">
    <input type="hidden" name="student_id" value="<?= htmlspecialchars($data['student_id']) ?>">
    <input type="text" name="first_name" value="<?= htmlspecialchars($data['first_name']) ?>" required>
    <input type="text" name="last_name" value="<?= htmlspecialchars($data['last_name']) ?>" required>
    <input type="password" name="password" value="<?= htmlspecialchars($data['password']) ?>" required>
    <input type="email" name="e_mail" value="<?= htmlspecialchars($data['e_mail']) ?>" required>
    <button type="submit">Edit</button>
</form>