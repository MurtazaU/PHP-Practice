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

<table class="table w-50 m-5">

<tr>
    <th>Name</th>
    <th>Age</th>
    <th>Class</th>
</tr>

<?php 
require('./data.php');


for($i = 0; $i < count($student_name); $i++){
?>

    <tr>
        
        <td> <?php echo $student_name[$i]  ?> </td>
        <td> <?php echo $student_age[$i]  ?> </td>
        <td> <?php echo $student_class[$i]  ?> </td>
    </tr>

<?php
};
?>

</table>





</body>
</html>