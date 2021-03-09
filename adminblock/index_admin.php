<?php
include_once __DIR__ . "/../../config/main.php";

include ENGINE_DIR . "render.php";
include ENGINE_DIR . "menu.php";
include ENGINE_DIR . "products.php";



$products = getProducts();
$menu = getMenu();
include "adminpage.php";

