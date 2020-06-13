<?php
  include_once 'connection.php';

  $course = $_POST['course'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $deadline = $_POST['deadline'];
  $time = $_POST['atTime'];
  $submitted = 0;
  $personal = 1;
  $new = 1;

  $sql = "INSERT INTO assignment(course, name, description, deadline, atTime, submitted, personal, new)
  VALUES('$course','$name','$description','$deadline', '$time', '$submitted', '$personal', '$new');";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: ../academic/thisWeek.php?added=success");
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
