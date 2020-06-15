<?php
include_once "../DBhandler/connection.php";
$sql = "SELECT * FROM assignment WHERE new='1';";
$result = mysqli_query($conn, $sql);
$numOfChanges = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="academicCSS/menu.css">
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
      <?php
      if($numOfChanges == 0){?>
          <li><a href="viewChanges.php"><?php echo $numOfChanges; ?> added/changes</a><br></li>
      <?php
      }
      else{?>
      <li><a href="viewChanges.php"><span style="color: white;background-color:red; border-radius: 3vw; padding: 1vw"><?php echo $numOfChanges; ?></span> added/changes</a><br></li>
      <?php
      }?>
  </ul>

</body>

</html>
