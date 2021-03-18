<?php
session_start();
if (isset($_POST['id'])){

    $productId = $_POST['id'];

    if(isset($_SESSION['basket'][$productId])){
        unset($_SESSION['basket'][$productId]);
    }
}
header('Location: basket.php');