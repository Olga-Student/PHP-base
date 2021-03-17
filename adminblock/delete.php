<?php

include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";

$id = (int) $_GET['id'];
mysqli_query(getConnection(), "DELETE FROM product_img WHERE product_img.id = $id ");

header('Location: index_admin.php');