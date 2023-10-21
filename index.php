<?php
include 'database.php';

$teachers = getTeachers();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Absence - Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Absence</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Hour</th>
      <th>Date</th>
      <th>Actions</th>
    </tr>
    <?php
    if ($teachers != NULL) {
      foreach ($teachers as $teacher) {
        echo "<tr>";
        echo "<td>" . $teacher['id'] . "</td>";
        echo "<td>" . $teacher['name'] . "</td>";
        echo "<td>" . $teacher['hour'] . "</td>";
        echo "<td>" . $teacher['date'] . "</td>";
        echo "<td>";
        echo "<a href='edit.php?id=" . $teacher['id'] . "'>Edit</a> ";
        echo "<a href='delete.php?id=" . $teacher['id'] . "'>Delete</a>";
        echo "</td>";
        echo "</tr>";
      }
    }
    ?>
  </table>
  <a href="add.php">Add Teacher</a>
</body>
</html>