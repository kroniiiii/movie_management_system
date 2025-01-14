<?php
$host="localhost";
$username="root";
$password=""; // $password=''
$dbname="mms";

try{
    $pdo = new PDO(dsn: "mysql:host=$host;dbname=$dbname", username: $username, password: $password);
    $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Error code: " . $e->getMessage();
}
?>
