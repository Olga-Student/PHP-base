<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";



$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];


mysqli_query(getConnection(), "INSERT INTO product_img 
    (id, title, link, views, description, price)
    VALUES ($id, '$title', '', '', '$description', $price)");

header('Location: index_admin.php');