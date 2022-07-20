<?php

// 4 Variables
$dbname = 'student';
$host = 'localhost';
$username = 'murtaza';
$password = '985gmail.com';


try{
// Creating Connection
$con = new PDO("mysql:host=$host;dbname=$dbname; $username; $password");


    $con->execute();
} catch(Exception $e){
    echo "Connection Failed" . $e->getMessage();
}

?>