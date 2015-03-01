<?php

//Nodebite black box
include_once("nodebite-swiss-army-oop.php");

//create a new instance of the DBObjectSaver class 
//and store it in the $db variable
$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "Save_data"
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
  unset($data_base->antagonists);
  unset($data_base->protagonists);
  unset($data_base->story);
}


echo(json_encode(true));