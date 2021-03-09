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
            <h2>Создание нового товара</h2>
            <div class="row col-md-12">
                <form action="createdproduct.php" method="post">

                    <div class="form-group">
                        <label>Название</label>
                        <input type="text" name="title"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <textarea name="description" class="form-control"  cols="84"
                                  rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Цена</label>
                        <input type="text" name="price" value=""
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" >Создать</button>
                    </div>
                </form>
            </div>
        </main>
        <footer>
        </footer>
    </div>
</div>
</body>
</html>

