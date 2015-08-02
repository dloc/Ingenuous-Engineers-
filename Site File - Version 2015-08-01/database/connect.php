<?php
$serverName = "localhost";
$userName = "vlang";
$password = "F@ntastic0!";
$dbName = "vlang";

global $gjdb; 

try {
    $gjdb = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    // set the PDO error mode to exception
    $gjdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>