<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $hour = $_POST['hour'];
  $date = $_POST['date'];
  updateTeacher($id, $name, $hour, $date);
  header("Location: index.php");
  exit();
}

$id = $_GET['id'];
$teacher = getTeacher($id);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Absence - Edit Teacher</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Absence - Edit Teacher</h1>
  <form method="post">
    <input type="hidden" name="id" value="<?php echo $teacher['id']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $teacher['name']; ?>" required><br>
    <label for="hour">Hour:</label>
    <input type="time" id="hour" name="hour" value="<?php echo $teacher['hour']; ?>" required><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" value="<?php echo $teacher['date']; ?>" required><br>
    <input type="submit" value="Save">
  </form>
  <a href="index.php">Back</a>
</body>
</html>