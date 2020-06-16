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
  <a class="back" class="button" href="../">&#8678;</a>
  <div class="grid">
    <div class="submitted"><a href="submittedAssignments.php">Submitted</a><br></div>
    <div class="week"><a href="thisWeek.php">ToDo this Week</a><br></div>
    <div class="month"><a href="thisMonths.php">ToDo this Month</a><br></div>
    <div class="block"><a href="endOfBlock.php">ToDo end of Block</a><br></div>
      <?php
      if($numOfChanges == 0){?>
          <div class="changes"><a href="viewChanges.php">added/changes <?php echo $numOfChanges; ?></a><br></div>
      <?php
      }
      else{?>
        <div class="changes"><a href="viewChanges.php">added/changes <span style="color: white;background-color:red; border-radius: 3vw; padding: 1vw; border: solid black"><?php echo $numOfChanges; ?></span></a><br></div>
      <?php
      }?>
    </div>

</body>

</html>
