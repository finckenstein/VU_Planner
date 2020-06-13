<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM assignment WHERE id = '$_GET[id]';";
  $result = mysqli_query($conn, $sql);
  $rows = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Assignment Overview</title>
</head>

<body>
  <a href="menu.php">Back</a>
  <h1><?php echo $rows['name'];; ?></h1>
  <p>Course: <?php echo $rows['course']; ?></p>
  <p>Description: <?php echo $rows['description']; ?></p>
  <p>Deadline: <?php echo $rows['deadline']; ?></p>
  <p>Time: <?php echo $rows['atTime']; ?></p>

  <?php
  if($rows['submitted'] == 1){?>
    <p>Allready Submitted Assignment</p>
  <?php
  }
  if($rows['personal'] == 0){?>
    <form id='chooseFile' style='display: none;'>
      <label>Select a file: </label><input type="file" id="myfile" name="myfile"><br><br>
      <a href="../DBhandler/submit.php?id=<?php echo $rows['id']?>">Submit</a>
    </form>
    <button id='submitButton' type="button" onclick="chooseFile()">Submit</button>
  <?php
  }
  else{?>
    <p><i>assignment cannot be handed in because it is a personal assignment.</i></p>
  <?php
  }
  ?>
  </body>

<script>
  function chooseFile(){
    var file = document.getElementById("chooseFile");

    if (file.style.display == "none") {
      file.style.display = "block";
      var button = document.getElementById("submitButton");
      button.style.display = "none";
    }
    else {
      alert('You successfully submitted the assignment!');
      window.location.href = "menu.html";
    }
  }
</script>

</html>
