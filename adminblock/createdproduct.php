<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";



$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];


$sql = mysqli_query(getConnection(),
   "INSERT INTO product_img (title, link, views, description, price)
 VALUES ('$title', '', '', '$description', $price)");

header('Location: index_admin.php');
