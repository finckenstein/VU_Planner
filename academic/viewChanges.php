<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM assignment WHERE new = '1';";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="academicCSS/viewChanges.css">
  <title>This Weeks toDo List</title>
</head>

<body>
  <h1>Updates</h1>
  <a class="back" href="menu.php">Back</a>
  <?php
  if(mysqli_num_rows($result) == 0){?>
    <p><i>Assignment feed already checked. Existing assignments can be found in todo lists</i></p>
  <?php
  }
  else{?>
    <table id="events">
      <tr>
        <th><h4>Name:</h4></th>
        <th><h4>Deadline:</h4></th>
        <th><h4>Info: </h4></th>
        <th><h4></h4></th>
      </tr>
      <?php
        while($rows = mysqli_fetch_assoc($result)){
      ?>
          <tr>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['deadline']; ?></td>
            <td class="grid">
              <div class="overview"><a href="assignmentOverview.php?id=<?php echo $rows['id']?>">Overview</a></div>
              <div class="gotIt"><a href="../DBhandler/setNewToFalse.php?id=<?php echo $rows['id']?>">got it!</a></div>
            </td>
          </tr>
      <?php
        }
      ?>
    </table>
  <?php
  }
  ?>
</body>

</html>
