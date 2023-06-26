<?php
require '../vendor/autoload.php';
require("../database.php");

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';

$blade = new BladeOne($views, $cache , BladeOne::MODE_AUTO);

$database = new DatabaseHandler();

$query = "SELECT * FROM rooms WHERE discount > 0"; 
$result = $database->executeSelectQuery($query);

$offerRooms = [];
while ($row = $result->fetch_assoc()) {
    $offerRooms[] = $row;
}

$query1 = "SELECT * FROM rooms"; 
$result1 = $database->executeSelectQuery($query1);

$rooms = [];
while ($row = $result1->fetch_assoc()) {
    $rooms[] = $row;
}

echo $blade->run("offers", ['offerRooms' => $offerRooms, 'rooms' => $rooms]);