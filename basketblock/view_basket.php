<?php
session_start();


?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <?php// include VIEWS_DIR . "blocks/header.php"; ?>
</head>
<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <header>
            <?php //include VIEWS_DIR . "blocks/menu.php"; ?>
        </header>

<div class="smalcart">
   <?php if(empty($_SESSION['baskets'])): ?>
    <p>Корзина пуста!</p>
   <?php else: ?>

           <?php foreach ($_SESSION['baskets'] as $item): ?>
               <tr>
                   <td> Название товара:
                       <?= $item['title'] ?>
                   <td>

                   <td>
                           Количество товара:<?= $item['id'] ?>
                       <a style="text-decoration: none"  href="addbasket.php?id=<?= $item['id'] ?>">Добавть</a>
                   </td>
                   <td>
                       <a style="text-decoration: none"  href="delbasket.php?id=<?= $item['id'] ?>">Удалить</a>
                   </td>
                   <td>

                       <a style="text-decoration: none"  href="add_order_item.php?id=<?= $item['id'] ?>">Создать заказ</a>
                   </td>
               </tr><br>

           <?php endforeach; ?>

   <?php endif; ?>
