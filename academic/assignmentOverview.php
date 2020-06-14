<?php
  include_once '../DBhandler/connection.php';
  $sql = "SELECT * FROM assignment WHERE id = '$_GET[id]';";
  $result = mysqli_query($conn, $sql);
  $rows = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="assignmentOverview.css">
  <title>Assignment Overview</title>
</head>

<body>
  <h1><?php echo $rows['name'];; ?></h1>
  <a class="back" href="menu.php">Back</a>
  <p><b>Course:</b> <?php echo $rows['course']; ?></p>
  <p><b>Description:</b></p>
  <p class="description"> <?php echo $rows['description']; ?></p>
  <p><b>Deadline:</b> <?php echo $rows['deadline']; ?></p>
  <p><b>Time:</b> <?php echo $rows['atTime']; ?></p>

  <?php
  if($rows['submitted'] == 1){?>
    <p id="alreadySubmitted"><i>All ready Submitted Assignment</i></p>
  <?php
  }
  if($rows['personal'] == 0){?>
    <form id='chooseFile' style='display: none;'>
      <label>Select a file: <br></label><input type="file" id="myfile" name="myfile"></input><br><br>
      <div class="actualSubmit">
        <a href="../DBhandler/submit.php?id=<?php echo $rows['id']?>">Submit</a>
      </div>
    </form>
    <div class="styleButton">
      <button id='submitButton' type="button" onclick="chooseFile()">Submit</button>
    </div>
  <?php
  }
  else{?>
    <p><i>Assignment cannot be handed in because it is personal.</i></p>
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
      var text = document.getElementById("alreadySubmitted");
      text.style.display = "none";
    }
    else {
      alert('You successfully submitted the assignment!');
      window.location.href = "menu.php";
    }
  }
</script>

</html>
