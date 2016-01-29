<?php
$db = new mysqli('localhost', 'jessetur_Jesse', 'Temp7287', 'jessetur_SPEBSQSA');

//don't want database name and filepath info to show if there is a problem so...
if($db->connect_errno){
  //use this for debugging purposes to find out why there is no connection to the database. 
  echo "$db->connect_error is: ", $db->connect_error;
  exit();
  //kills the page and displays this message
  //die("Sorry. We're having technical difficulties.");
}

?>