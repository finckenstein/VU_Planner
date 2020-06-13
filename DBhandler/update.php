<?php
if(array_key_exists('eventAdded',$_POST)){
  $sql1 = "UPDATE VUEvent SET attends='1' WHERE id='$id';";
  if (mysqli_query($conn, $sql1)) {
    header("Location:social_space.php");
  } else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($sql1);
  }
}
