<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM VUEvent WHERE attends = '0' AND private = '0' AND (eventDate BETWEEN CURDATE() AND '2020-06-30') ORDER BY eventDate ASC;";
  $result = mysqli_query($conn, $sql);

  $invitationsSQL = "SELECT * FROM VUEvent WHERE attends = '0' AND private = '1' AND(eventDate BETWEEN CURDATE() AND '2020-06-30') ORDER BY eventDate ASC;";
  $resultInvitations = mysqli_query($conn, $invitationsSQL);
  $numOfInvitations = mysqli_num_rows($resultInvitations);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="social_space.css">
  <title>Social space</title>
</head>

<body>
  <h1>Social Space</h1>
  <a class="back" href="../index.html">Back</a><br>
  <div class="grid">
    <div class="invitations">
      <a href="invitedTo.php"><?php echo $numOfInvitations; ?> invitations</a><br>
    </div>
    <div class="invite">
      <a href="invite.html">send invite</a>
    </div>
  </div>
  <div>
    <h2>Upcoming Events</h2>
  </div>
  <?php
  if(mysqli_num_rows($result) == 0){?>
    <p><i>New events and events you are not attending will be posted here</i></p><?php
  }
  else{?>
  <table id="events"><?php
      while($rows = mysqli_fetch_assoc($result)){
    ?>
        <tr>
          <td class="eventTitle"><?php echo $rows['name']; ?></td>
          <td>
            <?php
            if ($rows['studyAssociation'] == 'STORM'){?>
              <img class='logos' src="STORM_logo.png">
            <?php
            }
            else if($rows['studyAssociation'] == 'VU'){?>
              <img class='logos' src="VU_logo.png">
            <?php
            }
            else{
              echo $rows['studyAssociation'];
            }
            ?>
          </td>
          <td><?php echo $rows['eventDate']; ?></td>
          <td>
            <div class="learnMore">
              <a href="showEvent.php?id=<?php echo $rows['id']?>">learn<br>more</a>
            </div>
          </td>
        </tr>
    <?php
      }
    }
    ?>
  </table>

  <div class="viewCalendar">
    <a href="social_calendar.php">View Social Calendar</a>
  </div>

</body>

</html>
