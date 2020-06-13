<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM VUEvent WHERE id = '$_GET[id]';";
  $result = mysqli_query($conn, $sql);
  $rows = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Assignment Overview</title>
</head>

<body>
  <a href="social_space.php">Back</a>
  <h1><?php echo $rows['name']; ?></h1>
  <p><?php echo  $rows['eventDescription']; ?></p>
  <p>Date: <?php echo $rows['eventDate']; ?></p>
  <p>Time: <?php echo $rows['eventTime']; ?></p>
  <p>Location: <?php echo $rows['location']; ?></p>

  <?php
  if($rows['attends'] == '0'){?>
    <form method="POST">
      <input type="submit" name="eventAdded" value="Add to Social Calendar"><br/>
    </form>
    <?php
    if(array_key_exists('eventAdded',$_POST)){
      $sql = "UPDATE VUEvent SET attends='1' WHERE id='$rows[id]';";
      if (mysqli_query($conn, $sql)) {
        header("Location:social_space.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($sql);
      }
    }
  }
  ?>
  <?php
  if($rows['attends'] == '1'){
    if($rows['private'] == '1'){?>
      <form method="POST">
        <input type="submit" name="delete" value="Cancel Appointment"><br/>
      </form>
    <?php
      if(array_key_exists('delete',$_POST)){
        $sql = "DELETE FROM VUEvent WHERE id='$rows[id]';";
        if (mysqli_query($conn, $sql)) {
          header("Location:social_calendar.php");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($sql);
        }
      }
    }
    else{?>
      <form method="POST">
        <input type="submit" name="removeEvent" value="Remove from social calendar"><br/>
      </form>
    <?php
      if(array_key_exists('removeEvent',$_POST)){
        $sql = "UPDATE VUEvent SET attends='0' WHERE id='$rows[id]';";
        if (mysqli_query($conn, $sql)) {
          header("Location:social_calendar.php");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($sql);
        }
      }
    }
  }
  ?>

</body>

</html>
