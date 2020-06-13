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
  <title>Social space</title>
</head>

<body>
  <a href="../index.html">Back</a><br>
  <h1>Social Space</h1>
  <a href="invitedTo.php"><?php echo $numOfInvitations; ?> Invitations to ...</a><br>
  <a href="invite.html">Invite to ..</a>

  <h3>Upcoming Events</h3>
  <table>
    <?php
      while($rows = mysqli_fetch_assoc($result)){
    ?>
        <tr>
          <td><?php echo $rows['name']; ?></td>
          <td><?php echo $rows['studyAssociation']; ?></td>
          <td><?php echo $rows['eventDate']; ?></td>
          <td><?php echo $rows['eventTime']; ?></td>
          <td><a href="showEvent.php?id=<?php echo $rows['id']?>">More Info</a></td>
        </tr>
    <?php
      }
    ?>
  </table>

  <a href="social_calendar.php">View Social Calendar</a>

</body>

</html>
