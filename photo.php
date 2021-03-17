<?php

include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR ."db.php";

$id = (int)$_GET['id'];

if($image = queryOne("SELECT * FROM product_img WHERE id = {$id} ")){
    excute( "UPDATE product_img SET views = views +1 WHERE id = {$id}");
}
include VIEWS_DIR . "/gallery/photogallery.php"

    /*$res = mysqli_query($link, $sql);
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) ;
    $res = '';
    foreach ($data as $id) {
        $res . '<br>';

    }

    echo $res;*/

?>





