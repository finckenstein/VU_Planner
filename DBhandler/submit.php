<?php
include_once 'connection.php';
$sql = "UPDATE assignment SET submitted='1' WHERE id = '$_GET[id]';";
$result = mysqli_query($conn, $sql);
if($result){
  header("Location: ../academic/menu.php");
}else {
  echo "Error: " . $sql . "<br>" . mysqli_error($sql);
}
?>
