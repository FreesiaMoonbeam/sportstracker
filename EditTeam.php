<?php
require_once 'includes/sptr_mysqli_connect.php';
session_start();
if(isset($_GET["edit"])){
    $_SESSION["EditTeam"] = $_GET["edit"];
}

?>
<!--animation does NOT work, very bad :(-->
<div id="AddTeam" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-card-4">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('AddTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
      <h4>Enter new team details:</h4>
    </header>
    <form class="w3-container">
      <p><input class="w3-input" type="text" name = "EditName" required>
      <label>Team/School Name</label></p>
      <button class="w3-button w3-block w3-amber w3-section w3-padding" type="submit" name = "EditTeam">Confirm</button>
    </form>
  </div>
</div>

<?php
echo $_SESSION["EditTeam"];
if(isset($_GET["EditTeam"])){
  $NewName = $_GET["EditName"];
  echo $NewName;

  
  $NameOut = $_SESSION["EditTeam"];
  $sqlQuery = "SELECT tc_table.tc_ID AS 'IDToDelete' FROM tc_table WHERE tc_table.tc_name = '{$NameOut}';";
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

  $IDToEdit = (int)$Teams[0][0];

  echo $IDToEdit;

  $sqlQueryEdt = "UPDATE tc_table SET tc_table.tc_name = '{$NewName}' WHERE tc_table.tc_id = '{$IDToEdit}';";
  $QueryCheck = mysqli_Query($dbc, $sqlQueryEdt);

  if($QueryCheck === true){
    header("location: Interim.php?edit=success");
  }
  else{
    header("location: Interim.php?edit=failed");
  }
}
?>