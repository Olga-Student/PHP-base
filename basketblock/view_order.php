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

        <div class="order">
            <p>ВАШ ЗАКАЗ</p>

                <?php foreach ($_SESSION['baskets'] as $item): ?>
                    <tr>
                        <td> Название товара:
                            <?= $item['title'] ?>
                        <td>
                        <td>
                            Количество товара:<?= $item['qty'] ?>
                        </td>
                        <td>
                            Конечная сумма:<?= $item['qty'] * $item['prise'] ?>
                        <td>
                            Номер заказа:<?= $item['order_id'] ?>
                        </td>
                    </tr><br>
                <?php endforeach; ?>
        </div>
        <form action="add_orders.php" method="post" enctype="multipart/form-data">
            <label>Адрес доставки:</label>
            <input type="hidden" name="address" value="<?= ['user_id']?>"><br>
            <textarea style="width: 500px; height: 100px" name="address"></textarea><br>
            <button type="submit">Утвердить заказ</button>
        </form>