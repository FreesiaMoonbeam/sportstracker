<?php

#DEFINE ('DB_USER', 'root');
#DEFINE ('DB_PASSWORD', '');
#DEFINE ('DB_HOST', 'localhost');
#DEFINE ('DB_NAME', 'sportstracker_db');

$DBServer = "localhost:3306";
$DBUser = "root";
$DBPwd = "!ntenseAvar1ce";
$DBName = "scoretracker";

$connection = mysqli_connect($DBServer, $DBUser, $DBPwd, $DBName);


#$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

#if(!$dbc){
#    echo "'Could not connect to
#     MySQL on Shaina's end: '<br>";
#    die(mysqli_connect_error());
#}


if(!$connection){
    echo "Could not connect to
     MySQL on Gian's end: <br>";
    die(mysqli_connect_error());
}
?>
