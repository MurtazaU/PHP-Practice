<?php 


if(isset($_REQUEST["form__submit"])){
    echo "<h1> Welcome " . $_REQUEST["form__name"] . " To Our Website! </h1>";
} else{
    header("location : ./POST.php");
}

?>
