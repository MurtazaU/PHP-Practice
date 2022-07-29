<?php

require('./admin.php');  

// $sql = $con -> prepare('select * from students');
// $count = $sql -> countRow();
// echo $count;
include('./dbconnection.php');

    $sql = $con-> prepare('select * from students');
    $sql->execute();
    // $record = $sql->fetchALL(PDO::OBJ);


echo 'Yay';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-e    quiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <button>getData</button>
</body>
</html>