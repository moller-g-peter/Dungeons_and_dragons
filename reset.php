<?php

//Nodebite black box
include_once("nodebite-swiss-army-oop.php");

//create a new instance of the DBObjectSaver class 
//and store it in the $db variable
$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "character_db",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "characters_trial"
));

//if there is a request to reset the file
/*
  the ajax data object must look like:

  data: {
    reset: 1 //reset must have a value!
  }

  for this if statement to become true
*/
if (isset($_REQUEST["reset"])) {
  //unset monsters, heroes and story from $ds
  unset($ds->monsters);
  unset($ds->heroes);
  unset($ds->story);
}

//echo something out so that AJAX still thinks
//it recieves valid JSON as a response
//not echoing anything produces an AJAX error
echo(json_encode(true));