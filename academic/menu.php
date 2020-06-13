<?php
include_once "../DBhandler/connection.php";
$sql = "SELECT * FROM assignment WHERE new='1';";
$result = mysqli_query($conn, $sql);
$numOfChanges = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ToDo List</title>
</head>

<body>
  <h1>ToDo List</h1>
  <a class="button" href="../">Back</a><br>
  <a href="submittedAssignments.php">Submitted Assignments</a><br>
  <a href="thisWeek.php">This weeks toDo List</a><br>
  <a href="thisMonths.php">This months toDo List</a><br>
  <a href="endOfBlock.php">End of Block</a><br>
  <a href="viewChanges.php"><?php echo $numOfChanges; ?> assignments added or changed</a><br>

</body>

</html>
