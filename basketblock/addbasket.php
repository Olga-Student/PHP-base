<?php

include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $productId = $_POST['baskets']['id'];
    $productQty = $_POST['baskets']['qty'];

    if(isset($_SESSION['baskets'][$productId])) {
        $_SESSION['baskets'][$productId] += $productQty;
    } else {
        $_SESSION['baskets'][$productId] = $productQty;
    }
}


header('Location: basket.php');

