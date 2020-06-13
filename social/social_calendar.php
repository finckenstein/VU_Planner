<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM VUEvent WHERE attends = '1' ORDER BY eventDate ASC;";
  $result = mysqli_query($conn, $sql);
  $eventDays = array(array());
  $i = 0;

  while($rows = mysqli_fetch_assoc($result)){
    $date = $rows['eventDate'];
    $timestamp = strtotime($date);
    $day = date("d", $timestamp);

    $eventDays[$i][0] = $rows['id'];
    $eventDays[$i][1] = $day;
    $eventDays[$i][2] = $rows['private'];

    $i = $i +1;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="calendar.css">
  <title>This Weeks toDo List</title>
</head>

<body>
  <a class="back" href="social_space.php">Back</a>
  <h1>Social Calendar:</h1>
  <h2>June 2020</h2>
  <?php
    $daysInCalendar = 30;
    $day = 1;
    $i = 0;
    while ($day <= $daysInCalendar){
  ?>
  <div class='daysInCalendar'>
    <?php
      echo $day;?><br><?php
      while ($i < count($eventDays)){
        if($eventDays[$i][1] == $day){
          if($eventDays[$i][2] == 1){?>
            <a href="showEvent.php?id=<?php echo $eventDays[$i][0]?>">Appointment</a>
          <?php
          }
          else{?>
            <a href="showEvent.php?id=<?php echo $eventDays[$i][0]?>">Event Planned</a>
        <?php
          }
        }
        $i = $i + 1;
      }
      $day = $day + 1;
      $i =0;
    ?>
  </div>
  <?php
    }?>

</body>

</html>
