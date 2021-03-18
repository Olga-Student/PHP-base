<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $order_id= $_POST['user_id'];
    $address = $_POST['address'];
    $status_id = $_SESSION['basket']['order_id'];
    $orders_table = "INSERT INTO orders ( user_id, address, status_id)
 VALUES ( '$order_id', '$address', '$status_id')";
    echo "ВАШ ЗАКАЗ ДОБАВЛЕН";
};


