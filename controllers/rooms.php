<?php
require '../vendor/autoload.php';
require("../database.php");
require("./roomOccupancy.php");

use eftec\bladeone\BladeOne;


$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';

$blade = new BladeOne($views, $cache , BladeOne::MODE_AUTO);

$database = new DatabaseHandler();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT * FROM bookings"; 
    $result = $database->executeSelectQuery($query);

    $bookings = [];
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }

    $queryRooms = "SELECT * FROM rooms"; 
    $result = $database->executeSelectQuery($queryRooms);
    
    $dbRooms = [];
    while ($row = $result->fetch_assoc()) {
        $dbRooms[] = $row;
    }

    $rooms = [];
    foreach($dbRooms as $room){
        if(count(roomAvailability($room['id'], $bookings, $_POST["checkIn"], $_POST["checkOut"]))=== 0){
            $rooms[] = $room;
        }
    }
    


} else{
    $query = "SELECT * FROM rooms"; 
    $result = $database->executeSelectQuery($query);
    
    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
}






echo $blade->run("rooms", ['rooms' => $rooms]);