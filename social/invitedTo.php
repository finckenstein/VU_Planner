<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM VUEvent WHERE attends = '0' AND private = '1' AND(eventDate BETWEEN CURDATE() AND '2020-06-30') ORDER BY eventDate ASC;";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="calendar.css">
  <title>Invitations</title>
</head>

<body>
  <a href="social_space.php">Back</a><br>
  <h1>Invitations</h1>
  <?php
  while($rows = mysqli_fetch_assoc($result)){
  ?>
    <p><strong><?php echo $rows['name'];?></strong> invited you to <strong><?php echo $rows['eventDescription'];?></strong>
      on <strong><?php echo $rows['eventDate']; ?></strong> at <?php echo $rows['eventTime'];?>. (location: <?php echo $rows['location']; ?>)
    </p>
    <form method="POST">
      <a href="../DBhandler/manageInvitations.php?id=<?php echo $rows['id']?>&&attends=1">Accept</a><!-- attends goes 1. -->
      <a href="../DBhandler/manageInvitations.php?id=<?php echo $rows['id']?>&&attends=0">Decline</a><!-- Delete entry -->
    </form>
  <?php
  }?>

</body>

</html>
