<?php
include_once __DIR__ . "/../../config/main.php";
include ENGINE_DIR . "render.php";
include ENGINE_DIR . "menu.php";




session_start();

$menu = getMenu();
// Проверяем, что форма пришла.
if($_SERVER['REQUEST_METHOD'] == "POST") {

    $_SESSION['baskets'][] = array('id' => $_POST['id'], 'title' => $_POST['title'], 'qty' => $_POST['qty']);
    foreach ($_SESSION['baskets'] as $key => $value){
        if($value['id'] = $_POST['id'])
            $_SESSION['baskets'][$key]['qty'] += 1;
    }
    echo 'Товар добавден!';
}



include "view_basket.php";