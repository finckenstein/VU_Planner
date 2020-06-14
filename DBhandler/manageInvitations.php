<?php
include_once 'connection.php';

if($_GET['attends'] == 0){
  $sql = "DELETE FROM VUEvent WHERE id = '$_GET[id]';";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: ../social/social_space.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sql);
  }
}
else{
  $sql = "UPDATE VUEvent SET attends ='1' WHERE id = '$_GET[id]';";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: ../social/invitedTo.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sql);
  }
}
?>
