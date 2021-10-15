<?php

$serverName="localhost";
$userName="root";
$password="Toston.7";
$dbName="coding";


// CREATE CONNECTION

try
{
    $connection= new PDO("mysql:host=$serverName; dbname=$dbName; $userName, $password"); 

    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conection is a success...";

}
catch(PDOException $e){
    echo "Error in connection...".$e->getMessage();
}