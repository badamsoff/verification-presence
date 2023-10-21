<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $hour = $_POST['hour'];
  $date = $_POST['date'];
  addTeacher($name, $hour, $date);
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Absence - Add Teacher</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Absence - Add Teacher</h1>
  <form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="hour">Hour:</label>
    <input type="time" id="hour" name="hour" required><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br>
    <input type="submit" value="Add">
  </form>
  <a href="index.php">Back</a>
</body>
</html>