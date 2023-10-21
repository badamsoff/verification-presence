<?php
include 'database.php';

$id = $_GET['id'];
$teacher = getTeacher($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  deleteTeacher($id);
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Absence - Delete Teacher</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Absence - Delete Teacher</h1>
  <p>Are you sure you want to delete <?php echo $teacher['name']; ?>?</p>
  <form method="post">
    <input type="hidden" name="id" value="<?php echo $teacher['id']; ?>">
    <input type="submit" value="Yes">
  </form>
  <a href="index.php">No</a>
</body>
</html>