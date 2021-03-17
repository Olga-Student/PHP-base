<?php
if (isset($_POST['id'])){
    var_dump($_POST);
    $productId = $_POST['id'];

    if(isset($_SESSION['basket'][$productId])){
        unset($_SESSION['basket'][$productId]);
    }
}
header('Location: basket.php');