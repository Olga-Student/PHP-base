<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <title></title>
</head>
<body>

<?php
$name = "SHOP";
echo $name;

$menu = [
    'Главная',
    'Корзина',
    'Доставка',
];
function drawMenu(array $menu)
{
    echo '<ul class="nav justify-content-end">';
    foreach ($menu as $item) {
        echo '<li class="nav-item">
                <a class="nav-link active" href="#">';
        echo $item;
        echo '</a>
            </li>';
    }
    echo '</ul>';
}
drawMenu($menu);




function arrey_Img(){
    $images =scandir('img/'.$_GET['name_file']);
    {
        echo '<div class="goods-item">';
        foreach ($images as $image) {
            if ($image=='.' or $image=='..')continue;
            echo '<div><a class="item" href="img/'.$_GET['name_file'].'/'.$image.'">
            <img class="item-foto" src="img/'.$_GET['name_file'].'/'.$image.'" height="70" width="60" ><a/><div/>' ;
        }
    }
}
arrey_Img();
?>

</body>
</html>


















