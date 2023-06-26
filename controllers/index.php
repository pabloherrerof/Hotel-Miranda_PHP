<?php
require '../vendor/autoload.php';
require("../database.php");

use eftec\bladeone\BladeOne;


$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';

$blade = new BladeOne($views, $cache , BladeOne::MODE_AUTO);

$database = new DatabaseHandler();

$query = "SELECT * FROM rooms"; 
$result = $database->executeSelectQuery($query);

$rooms = [];
while ($row = $result->fetch_assoc()) {
    $rooms[] = $row;
}




echo $blade->run("index", ['rooms' => $rooms]);