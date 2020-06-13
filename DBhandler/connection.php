<?php
  $dbServername = "localhost";//should only be changed when actually dealing with online DB
  $dbUsername = "root"; //to real values
  $dbPassword = "";
  $dbName = "toDoList";

  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
