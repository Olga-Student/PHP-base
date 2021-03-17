<?php
include_once __DIR__ . "/../../config/main.php";

include ENGINE_DIR . "render.php";
include ENGINE_DIR . "menu.php";
include ENGINE_DIR . "products.php";

$product_id = (int) $_GET['id'];
$product = mysqli_query(getConnection(), "SELECT * FROM product_img 
WHERE id = '$product_id'");
$product = mysqli_fetch_assoc($product);


$coments = mysqli_query(getConnection(), "SELECT * FROM feedbacks 
WHERE product_id = '$product_id'");

$coments = mysqli_fetch_all($coments);


$menu = getMenu();
include "product_page.php";


