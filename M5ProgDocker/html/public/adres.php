<?php


include_once("../source/database.php");

$connection = database_connect();

$result = $connection->query("SELECT * from boek ");
$result = $connection->query("SELECT * from persoon ");


print_r($result->fetch_all());

