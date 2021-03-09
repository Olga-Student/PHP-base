<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "db.php";


$id = $_POST['id'];
$content =$_POST['content'];

 mysqli_query(getConnection(),
    "INSERT INTO feedbacks ( product_id, content)
 VALUES ( '$id', '$content')");

header('location: cart_product.php?id=' .$id);