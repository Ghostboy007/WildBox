<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set('Indian/Reunion');

$script_tz = date_default_timezone_get();

try {
    $con = new PDO("mysql:dbname=wildbox;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e) {
    exit("Connection failed: ". $e->getMessage());
    
}
?>
