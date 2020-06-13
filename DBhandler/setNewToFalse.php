<?php
  include_once 'connection.php';
  $sql = "UPDATE assignment SET new = '0' WHERE id='$_GET[id]';";
  $result = mysqli_query($conn, $sql);

  if (mysqli_query($conn, $sql)) {
    header("Location: ../academic/viewChanges.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
