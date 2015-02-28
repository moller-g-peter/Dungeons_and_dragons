<?php

include_once("nodebite-swiss-army-oop.php");

$data_base = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "Save_data"
));

unset($data_base->protagonists);
unset($data_base->cpu_protagonists);
unset($data_base->antagonists);
unset($data_base->items);