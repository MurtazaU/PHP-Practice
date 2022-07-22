<?php  

$db = 'registration';
$host = 'localhost';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;";

try{
    $con = new PDO($dsn, $username, $password);

} catch(Exception $e){
    echo $e->getMessage();
}

?>