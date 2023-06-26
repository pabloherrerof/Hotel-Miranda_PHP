<?php
require '../vendor/autoload.php';
require("../database.php");

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';

$blade = new BladeOne($views, $cache , BladeOne::MODE_AUTO);

$database = new DatabaseHandler();

$id = $_GET['id'];

$query = "SELECT * FROM rooms WHERE id = '$id'";
$result = $database->executeSelectQuery($query);

if ($result->num_rows > 0) {
    $room = $result->fetch_array();
}

$roomType = $room['roomType'];
$id = $room['id'];

$query1 = "SELECT * FROM rooms WHERE roomType = '$roomType' AND id <> '$id' LIMIT 2"; 
$result1 = $database->executeSelectQuery($query1);

$rooms = [];
while ($row = $result1->fetch_assoc()) {
    $rooms[] = $row;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
}






echo $blade->run("room-detail", [ 'room' => $room, 'rooms' => $rooms]);