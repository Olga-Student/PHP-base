<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "db.php";

//$images = getFiles(PUBLIC_DIR . "img");
$images = queryAll("SELECT * FROM product_img ORDER BY views DESC");

include  VIEWS_DIR . "gallery/gallery.php";
?>







