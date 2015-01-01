<?php

include_once("nodebite-swiss-army-oop.php");

$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "character_db",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "DaD: "
));

$object_king_arthur = New Knight();
$object_king_arthur->set_character_name("King Arthur");

