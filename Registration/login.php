<?php 

include('./dbconnection.php');

if(isset($_REQUEST['login'])){
    $userEmail = $_REQUEST['loginEmail'];
    $userPassword = $_REQUEST['loginPassword'];

    $sql = $con-> prepare('select * from accountdetails where email = ? && password = ?');
    $sql->bindParam(1, $userEmail);
    $sql->bindParam(2, $userPassword);

    $sql->execute();
    $count = $sql->rowCount();

   echo $count;


}


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
    <div class="row">
        <div class="col-6 m-5">
        <form method="POST" action="">


            <div class="mb-3">
                <label for="loginEmail" class="form-label">Email</label>
                <input type="Email" class="form-control" id="loginEmail" name="loginEmail">
            </div>

            <div class="mb-3">
                <label for="loginPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="loginPassword" name="loginPassword">
            </div>

            <button type="submit" class="btn btn-primary mb-3" name="login">Submit</button>
        </form>

        <?php
            if(isset($_REQUEST['login'])){
                if($count > 0){
                    header('location:./home.php');
                } else{
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Invalid credentials</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
        
        ?>

        </div>
    </div>
</div>
