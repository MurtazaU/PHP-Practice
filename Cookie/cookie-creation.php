<?php  
if(isset($_REQUEST['product__add'])){
    echo 'A New Cookie Has Been Added';

    $product__search = $_REQUEST['product__search'];

    setcookie('product__search__' . $product__search, $product__search , time() + 3600 * 24 * 30, '/');

} else{
    header('location : ./cookie-selection.php');
}

if($_COOKIE['product__search__' . $_REQUEST['product__search']]){
    echo $_COOKIE['product__search__' . $product__search];
}


?>