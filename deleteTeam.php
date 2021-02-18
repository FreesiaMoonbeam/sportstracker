<?php

require_once 'sptr_mysqli_connect.php';
$NameOut = $_GET["remove"];

echo $NameOut;

//Delete team if ID exists
//CHANGE THIS CONTEXT
$sqlQuery = "SELECT teams.TeamID AS 'IDToDelete' FROM teams WHERE teams.tname = '{$NameOut}';";
$QueryOut = mysqli_Query($connection, $sqlQuery);

if(mysqli_num_rows($QueryOut) > 0) {
#get tabulated rows as arrays
  $entry = 0;
    while($activerow = mysqli_fetch_array($QueryOut)){
      #feed data to an array variable
      foreach($activerow as $key => $incomingvalue){
        //echo $incomingvalue;
        $Teams[$entry][$key] = $incomingvalue;
      }

      $entry++;
   }
}

//This isn't particularly efficient...Too bad!
$IDToDelete = (int)$Teams[0][0];

echo $IDToDelete;

$sqlQueryDel = "DELETE FROM teams WHERE teams.TeamID = '{$IDToDelete}';";
$QueryCheck = mysqli_Query($connection, $sqlQueryDel);

if($QueryCheck === true){
  header("location: Starter2.php?delete=success");
}

else{
  header("location: Starter2.php?delete=failed");
}

?>
