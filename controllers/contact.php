<?php
require '../vendor/autoload.php';
require("../database.php");

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';

$blade = new BladeOne($views, $cache , BladeOne::MODE_AUTO);

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = "Thank you for your request!
                We have received it correctly. 
                Someone from our Team will get back to you very soon.";
    
    $database = new DatabaseHandler();
    $selectQuery = "SELECT id FROM contacts ORDER BY ID DESC LIMIT 1;";
    $resultSelect = $database->executeSelectQuery($selectQuery);

    
    
    if ($resultSelect->num_rows > 0) {
        $lastContact = $resultSelect->fetch_array();
    }

    $lastId = intval(substr($lastContact[0], 2));

$id = "C-" . str_pad(($lastId + 1), 4, "0", STR_PAD_LEFT);
$customer = json_encode([
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "phone" => $_POST["phone"],
]);
$subject = htmlspecialchars($_POST["subject"]);
$comment = htmlspecialchars($_POST["comment"]);
$date = (new DateTime())->format("Y-m-d");
$isArchived = 0;

$database->executeSelectQuery("INSERT INTO `contacts` (id, date, customer, isArchived, subject, comment) VALUES ('$id', '$date', '$customer', '$isArchived', '$subject', '$comment')");
    } 


echo $blade->run("contact", ["message" => $message]);