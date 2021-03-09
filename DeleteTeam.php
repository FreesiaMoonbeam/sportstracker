<?php

require_once 'includes/sptr_mysqli_connect.php';
$NameOut = $_GET["remove"];

echo $NameOut;


$sqlQuery = "SELECT tc_table.tc_id AS 'IDToDelete' FROM tc_table WHERE tc_table.tc_name = '{$NameOut}';";
$QueryOut = mysqli_Query($dbc, $sqlQuery);

if(mysqli_num_rows($QueryOut) > 0) {
#get tabulated rows as arrays
  $entry = 0;
    while($activerow = mysqli_fetch_array($QueryOut)){
      #put data to an array variable
      foreach($activerow as $key => $incomingvalue){
        //echo $incomingvalue;
        $Teams[$entry][$key] = $incomingvalue;
      }

      $entry++;
   }
}


$IDToDelete = (int)$Teams[0][0];

echo $IDToDelete;

$sqlQueryDel = "DELETE FROM tc_table WHERE tc_table.tc_id = '{$IDToDelete}';";
$QueryCheck = mysqli_Query($dbc, $sqlQueryDel);

if($QueryCheck === true){
  header("location: Interim.php?delete=success");
}

else{
  header("location: Interim.php?delete=failed");
}