<?php
    $host = "localhost";
    $dbname = "pdo_crud";
    $username = "root";
    $password = "";

    try{
        $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    }catch(PDOException $e){
        die("Connection Failed : " . $e->getMessage() );
    }


?>