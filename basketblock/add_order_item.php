<?php

include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST") {
var_dump($_SESSION);
    $id = $_SESSION['baskets']['id'];
    $id = $_SESSION['basket']['user_id'];
    $count = $_SESSION['baskets']['price'];
    $order_id = 0;
    if(isset($_SESSION['baskets'][$order_id])) {
        $_SESSION['baskets'][$order_id] += $order_id;
    };

    mysqli_query(getConnection(),
        "INSERT INTO order_items ( product_id, cont, order_id)
 VALUES ( '$id', '$count', '$order_id')");
};


header('location: order.php');