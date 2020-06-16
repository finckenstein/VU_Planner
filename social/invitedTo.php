<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM VUEvent WHERE attends = '0' AND private = '1' AND(eventDate BETWEEN 2020-06-9 AND '2020-06-30') ORDER BY eventDate ASC;";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="socialCSS/invitations.css">
  <title>Invitation Feed</title>
</head>

<body>
  <h1>Invitations</h1>
  <a class="back" href="social_space.php">&#8678;</a><br>
  <?php
  while($rows = mysqli_fetch_assoc($result)){
  ?>
  <div class="grid">
    <div class="textInvitation">
    <p><strong><?php echo $rows['name'];?></strong> invited you to <strong><?php echo $rows['eventDescription'];?></strong>
        on <strong><?php echo $rows['eventDate']; ?></strong> at <?php echo $rows['eventTime'];?>. <br>(location: <?php echo $rows['location']; ?>)
      </p>
    </div>
    <div class="respond">
      <form method="POST">
        <div class="accept">
          <a href="../DBhandler/manageInvitations.php?id=<?php echo $rows['id']?>&&attends=1">Accept</a><!-- attends goes 1. -->
        </div>
        <div class="decline">
          <a href="../DBhandler/manageInvitations.php?id=<?php echo $rows['id']?>&&attends=0">Decline</a><!-- Delete entry -->
        </div>
      </form>
    </div>
  </div>
  <?php
  }?>

</body>

</html>
