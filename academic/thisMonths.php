<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM assignment WHERE submitted = '0' AND deadline BETWEEN CURDATE() AND '2020-06-30' ORDER BY deadline ASC;";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>This Months toDo List</title>
</head>

<body>
  <h1>This Months toDo List</h1>
  <a class="button" href="menu.php">Back</a>
  <table>
    <tr>
      <th><h4>Course:</h4></th>
      <th><h4>Name:</h4></th>
      <th><h4>Deadline:</h4></th>
      <th><h4>Info: </h4></th>
    </tr>
    <?php
      while($rows=mysqli_fetch_assoc($result)){
        ?>
        <tr>
          <td><?php echo $rows['course']; ?></td>
          <td><?php echo $rows['name']; ?></td>
          <td><?php echo $rows['deadline']; ?></td>
          <td><a href="assignmentOverview.php?id=<?php echo $rows['id']?>">Overview</a></td>
        </tr>
      <?php }?>
  </table>

  <a href="add_assignment.html">Add Personal Assignment</a><br>
  <a href="setReminder.html">Set Reminder</a><br>
</body>

</html>
