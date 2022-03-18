<?php

// DBConnection class
require ("./../database/DBConnection.php");

// DataBase class
require ("./../database/DataBase.php");


$db = new DBConnection();

$table = new DataBase($database);

?>
