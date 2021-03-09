
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
            <h2>Карточка товара</h2>

            <div class="">
                 <form  action="../basketblock/basket.php" method="post">
                     <input type="hidden" name="id" value="<?= $product['id']?>">
                     <a href="#">
                         <img src="/img/<?=$product['link']?>" ></a> <br>
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

            <div class="">
                <button type="submit" class="" value="">Купить</button>
            </div>
                 </form>


            <div class="">
                <form  action="creat_comment.php" method="post">

                    <h4>Оставить отзыв</h4>
                    <input type="hidden" name="id" value="<?= $product['id']?>">
                    <textarea style="width: 500px; height: 100px" name="content"></textarea><br>

                    <button style="margin: 10px 0; width: 200px; text-align: center" type="submit">Отправить</button>
                </form>
                <h3>Все отзывы</h3>

                <?php
                foreach ($coments as $coment){
                ?> <p class="form-control"><?=$coment[2]?></p>
                <?php
                }
                ?>
            </div>
        </main>
