<?php
include_once "../DBhandler/connection.php";
$sql = "SELECT * FROM assignment WHERE new='1';";
$result = mysqli_query($conn, $sql);
$numOfChanges = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="menu.css">
  <title>ToDo List</title>
</head>

<body>
  <h1>ToDo List</h1>
  <ul>
    <li><a class="back" class="button" href="../">Back</a><br></li>
    <li><a href="submittedAssignments.php">Submitted</a><br></li>
    <li><a href="thisWeek.php">ToDo this Week</a><br></li>
    <li><a href="thisMonths.php">ToDo this Month</a><br></li>
    <li><a href="endOfBlock.php">ToDo end of Block</a><br></li>
    <li><a href="viewChanges.php"><?php echo $numOfChanges; ?> added/changes</a><br></li>
  </ul>

</body>

</html>
