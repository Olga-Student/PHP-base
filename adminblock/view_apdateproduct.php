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
            <h2>Изменение товара</h2>
            <div class="">
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?= $product['id']?>">
                        <label>Название</label>

                        <input type="text" name="title" value="<?= $product['title']?>"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <textarea name="product[description]" class="form-control" id="" cols="84"
                                  rows="4"><?= $product['description']?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Цена</label>
                        <input type="text" name="product[price]" value="<?= $product['price']  ?>"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="">Обновить</button>
                    </div>
                </form>
        </main>
        </main>
        <footer>
        </footer>
    </div>
</div>
</body>
</html>

