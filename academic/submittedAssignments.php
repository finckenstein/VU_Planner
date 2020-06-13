<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM assignment WHERE submitted = '1';";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Submitted Assignments</title>
</head>

<body>
  <h1>Submitted Assignments</h1>
  <a class="button" href="menu.php">Back</a>
  <table>
    <tr>
      <th><h4>Course:</h4></th>
      <th><h4>Name:</h4></th>
      <th><h4>Deadline:</h4></th>
      <th><h4>Info: </h4></th>
    </tr>
    <?php
      while($rows = mysqli_fetch_assoc($result)){
    ?>
        <tr>
          <td><?php echo $rows['course']; ?></td>
          <td><?php echo $rows['name']; ?></td>
          <td><?php echo $rows['deadline']; ?></td>
          <td><a href="assignmentOverview.php?id=<?php echo $rows['id']?>">Overview</a></td>
        </tr>
    <?php
      }
    ?>
  </table>
</body>

</html>
