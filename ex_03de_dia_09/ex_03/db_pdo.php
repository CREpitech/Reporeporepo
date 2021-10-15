<?php

$serverName="localhost";
$userName="phpuser";
$password="Toston.7";
$dbName="coding";


define("ERROR_LOG_FILE", "/home/cristian-romero/Rendu/C-DEV-111-BAR-1-1-phpday09-cristian.romero/ex_03/error_log.txt");



// CREATE CONNECTION
function connect_db($serverName,$dbName,$userName=null,$password=null){
try
{
    $connection= new PDO("mysql:host=localhost;dbname=coding", $userName, $password); 
    echo "connected succesfully";
}
catch(PDOException $e){
    error_log(
        "PDO ERROR: Error in connection...". $e->getMessage(),
        3,ERROR_LOG_FILE
    );
    echo "PDO ERROR:" . $e->getMessage() . " storage in " . ERROR_LOG_FILE;

}


}

echo "HOLA";
connect_db($serverName, $dbName, $userName, $password);