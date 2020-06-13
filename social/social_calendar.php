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
    <div class="month">
    <ul>
      <li>June 2020<br></li>
    </ul>
  </div>

  <ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

  <?php
    $daysInCalendar = 30;
    $day = 0;
    $i = 0;
    if (mysqli_num_rows($result)==0){
      while ($day < $daysInCalendar){
        ?>
        <ul class="daysInCalendar">
          <li><?php echo $day + 1;?></li>
        </ul>
        <?php
        $day = $day + 1;
      }
    }
    else{
      while ($day < $daysInCalendar){?>
        <ul class="daysInCalendar">
          <li><?php echo $day + 1;?>
        <?php
        while ($i < count($eventDays)){
          if($eventDays[$i][1] == $day+1){
            if($eventDays[$i][2] == 1){?>
              <a class="notification" href="showEvent.php?id=<?php echo $eventDays[$i][0]?>">A</a></li>
            </ul>
            <?php
            }
            else{?>
              <a class="notification" href="showEvent.php?id=<?php echo $eventDays[$i][0]?>">E</a></li>
            </ul>
            <?php
            }
          }
          $i = $i + 1;
        }
        $day = $day + 1;
        $i =0;
        ?>
      </ul>
  <?php
    }
  }
  ?>

</body>

</html>
