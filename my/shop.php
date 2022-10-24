<?php
include 'goods.php';
mysqli_set_charset($mysqli, "utf8");
$sql = "SELECT * FROM `goods`";
$result = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Shop</title>
    <link rel="stylesheet" href="shop.css">
</head>

<body>
    <header>
    </header>
    <main>
        <div class="main main_baner">
            <div class="container">
                <div class="col-1"></div>
                <h1 class="col-11 main_head container">ФРУКТОВЫЙ ПОЗИТИВ</h1>
            </div>
        </div>
    </main>

    <section class="goods_block container">
        <div class="row">
            <div class="col-1"></div>
            <h2 class="col-11 goods_block__head">Полезно, не значит — не вкусно</h2>
        </div>

        <div class="goods_block_category category_fruit row">
            <div class="col-1"></div>
            <h4 class="col-11 goods_block_category__head">Фруктовый ряд</h4>
            <div class="row goods_block_category__cards">
                <div class="col-1"></div>
                <div class="col-10 cards_block">
                    <?php
                    while ($good = mysqli_fetch_assoc($result)) {
                        $image = '<img class="card_goods__img" src="' .$good['image'] . '" alt="fruit">';
                        $id = ' id="'. $good['id'] . '"';
                    ?>
                        <div class="goods_block_category__cards_card card_goods" <?php echo $id?> >
                            <?php echo $image; ?>
                            <div class="card_goods__order">
                                <div class="card_goods__order_price">
                                    <span class="price"><?php echo $good['price']; ?></span><span class="units">&nbsp;<?php echo  $good['units_of_measurement'] . '/' . $good['valute']; ?></span>
                                </div>
                                <div class="card_goods__order_count">
                                    <span>Количество: </span>
                                    <input type="number" placeholder="1">
                                    <span>&nbsp;<?php echo $good['units_of_measurement']; ?></span>
                                </div>
                                <div class="card_goods__order_totalCost">
                                    <div>Итого:</div>
                                    <span>233</span><span>&nbsp;<?php echo  $good['valute']; ?></span>
                                </div>
                                <button class="card_goods__order_btn">Заказать</button>
                            </div>
                            <div class="card_goods__description">
                                <h5 class="card_goods__description_head"><?php echo  $good['name']; ?></h5>
                                <p class="card_goods__description_text"><?php echo  $good['description']; ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="goods_block_category category_vegetables row">
            <div class="col-1"></div>
            <h4 class="col-11 goods_block_category__head">Овощная лавка</h4>
            <div class="row goods_block_category__cards">
                <div class="col-1"></div>

                <div class="col-1"></div>
            </div>
        </div>

    </section>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>