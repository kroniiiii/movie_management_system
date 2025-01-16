<?php
$user = 'root';
$password = 'root'; // $password = '';
$server = 'localhost';
$dbname = 'mms';

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    // echo "Connection successful";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
