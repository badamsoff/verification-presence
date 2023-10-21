<?php
include 'config.php';

function executeQuery($sql) {
  global $conn;
  $result = $conn->query($sql);
  if ($result === TRUE) {
    return TRUE;
  } else {
    return FALSE;
  }
}

function getTeachers() {
  global $conn;
  $sql = "SELECT * FROM Teacher";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $teachers = array();
    while($row = $result->fetch_assoc()) {
      $teachers[] = $row;
    }
    return $teachers;
  } else {
    return NULL;
  }
}

function getTeacher($id) {
  global $conn;
  $sql = "SELECT * FROM Teacher WHERE id=$id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $teacher = $result->fetch_assoc();
    return $teacher;
  } else {
    return NULL;
  }
}

function addTeacher($name, $hour, $date) {
  $sql = "INSERT INTO Teacher (name, hour, date) VALUES ('$name', '$hour', '$date')";
  return executeQuery($sql);
}

function updateTeacher($id, $name, $hour, $date) {
  $sql = "UPDATE Teacher SET name='$name', hour='$hour', date='$date' WHERE id=$id";
  return executeQuery($sql);
}

function deleteTeacher($id) {
  $sql = "DELETE FROM Teacher WHERE id=$id";
  return executeQuery($sql);
}
?>