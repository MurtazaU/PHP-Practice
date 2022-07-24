<?php 

include('./dbconnection.php');

    $sql = $con-> prepare('select * from accountdetails');
    $sql->execute();
    $record = $sql->fetchALL(PDO::is_object);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row m-5">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PASSWORD</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($record as $row){
                    echo $row->id;
                }
                ?>
                <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td>@</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
