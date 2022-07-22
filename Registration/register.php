<?php 

include('./dbconnection.php');

if(isset($_REQUEST['submit'])){
    $userName = $_REQUEST['formName'];
    $userEmail = $_REQUEST['formEmail'];
    $userPassword = $_REQUEST['formPassword'];

    $sql = $con->prepare('insert into accountdetails(name,email,password) values (?,?,?)');
    $sql -> bindParam(1,$userName);
    $sql -> bindParam(2,$userEmail);
    $sql -> bindParam(3,$userPassword);

    $sql-> execute();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<div class="container">
    <div class="row">
        <div class="col-6 m-5">
            <form method="POST" action="">

                <div class="mb-3">
                    <label for="formName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formName" name="formName" >
                </div>

                <div class="mb-3">
                    <label for="formEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="formEmail" name="formEmail">
                </div>

                <div class="mb-3">
                    <label for="formPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="formPassword" name="formPassword">
                </div>

                <input type="submit" class="btn btn-success form-control" value="Register" name="submit">
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>