<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM assignment WHERE new = '1';";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>This Weeks toDo List</title>
</head>

<body>
  <h1>Updates Assignments</h1>
  <a class="button" href="menu.php">Back</a>
  <?php
  if(mysqli_num_rows($result) == 0){?>
    <p><i>Assignment feed already checked. Existing assignments can be found in todo lists</i></p>
  <?php
  }
  else{?>
    <table>
      <tr>
        <th><h4>Course:</h4></th>
        <th><h4>Name:</h4></th>
        <th><h4>Deadline:</h4></th>
        <th><h4>Info: </h4></th>
        <th><h4></h4></th>
      </tr>
      <?php
        while($rows = mysqli_fetch_assoc($result)){
      ?>
          <tr>
            <td><?php echo $rows['course']; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['deadline']; ?></td>
            <td><a href="assignmentOverview.php?id=<?php echo $rows['id']?>">Overview</a></td>
            <td><a href="../DBhandler/setNewToFalse.php?id=<?php echo $rows['id']?>">I'm aware!</a></td>
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
