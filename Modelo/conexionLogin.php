<?php 

$host = "localhost";
$user= "property";
$pass = "123456";

$pdo = new PDO("mysql:host=$host;dbname=property-deluxe", $user, $pass);

try {
    $pdo = new PDO("mysql:host=$host;dbname=property-deluxe", $user, $pass);
} catch (PDOException $e) {
  
    die($e->getMessage());
}
 ?>