<?php
  if(isset($_POST["NewTeam"])){
  require_once 'sptr_mysqli_connect.php';

  $SQLquery = "INSERT INTO teams (tname, memCount) VALUES ('[$_GET["TeamName"]]', '[$_GET["MemberCount"]]')";
  $QueryOut = mysqli_query($connection, $SQLquery);


  if($QueryCheck === true){
    header("location: Starter2.php?add=success");
  }

  else{
    header("location: Starter2.php?add=failed");
  }
