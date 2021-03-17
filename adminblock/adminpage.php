<!doctype html>

<html lang="en">
<head>
    <?php include VIEWS_DIR . "blocks/header.php"; ?>
</head>
<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <header>
            <?php include VIEWS_DIR . "blocks/menu.php"; ?>
        </header>
        <main>
            <h2>Управление товарами</h2>
            <p>
                <a class="btn btn-success" href="creat_new_product.php">
                    Создать
                </a>
            </p>
            <div class="list-group">
                <?php foreach ($products as $product): ?>
                    <div class="list-group-item">
                        <h2><?= $product['title']?></h2>
                        <p>
                            <a class="btn btn-primary" href="update_product.php?id=<?=$product['id']?>">
                                Изменить
                            </a>
                            <a class="btn btn-danger" href="delete.php?id=<?=$product['id']?>">
                                Удалить
                            </a>
                        </p>
                    </div>
                <?php endforeach;?>
            </div>
        </main>
        <footer>
        </footer>
    </div>
</div>
</body>
</html>
