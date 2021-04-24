<?php
require_once 'pdoconfig.php';
 
try {
    $con= mysqli_connect("$host","$username","$password","$dbname");
    // echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}