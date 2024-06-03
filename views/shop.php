<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="public/main.css">
    <title>Shop</title>
</head>

<body>
    <!-- HEADER -->
    <?php require "include/header.php" ?>
    <!-- End header -->
    <div class="tablecell-pages text-center">
        <div class="container">
            <p class="subtitle-pages">FRESH AND ORGANIC</p>
            <h1 class="text-title-pages">Shop</h1>
        </div>
    </div>
    </div>
    <div class="product-filters">
        <div class="container">
            <div class="background-filters">
                <div class="row space-center">
                    <button id="active" onclick="functionAll()" class="btn-filters">All</button>
                    <button id="active2" onclick="functionBerry()">Berry</button>
                    <button id="active3" onclick="functionLemon()">Lemon</button>
                    <button id="active4" onclick="functionFruits()">Fruits</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <div class="product-section">
        <div class="container">
            <div class="row space-center">
                <?php
                foreach ($products as $product) {
                    if ($product['catalogue_id'] == 2) {
                        ?>
                        <a href="<?= BASE_URL . '?act=product&id=' . $product['id'] ?>">
                            <div id="berry" class="box-product-item text-center">
                                <img class="product-img" src="<?= BASE_URL . $product['img_thumbnail'] ?>">
                                <h1 class="product-name"><?php echo $product['name'] ?></h1>
                                <p>Per Kg</p>
                                <h1 class="product-price"><?php echo $product['price_regular'] ?>$</h1>
                                <a href="<?= BASE_URL . '?act=cart-add&productID=' . $product['id'] . '&quantity=1' ?>"
                                    class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                            </div>
                        </a>
                        <?php
                    }
                }
                ?>
                <?php
                foreach ($products as $product) {
                    if ($product['catalogue_id'] == 3) {
                        ?>
                        <a href="<?= BASE_URL . '?act=product&id=' . $product['id'] ?>">
                            <div id="lemon" class="box-product-item text-center">
                                <img class="product-img" src="<?= BASE_URL . $product['img_thumbnail'] ?>">
                                <h1 class="product-name"><?php echo $product['name'] ?></h1>
                                <p>Per Kg</p>
                                <h1 class="product-price"><?php echo $product['price_regular'] ?>$</h1>
                                <a href="<?= BASE_URL . '?act=cart-add&productID=' . $product['id'] . '&quantity=1' ?>"
                                    class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                            </div>
                        </a>
                        <?php
                    }
                }
                ?>
                <?php
                foreach ($products as $product) {
                    if ($product['catalogue_id'] == 4) {
                        ?>
                        <a href="<?= BASE_URL . '?act=product&id=' . $product['id'] ?>">
                            <div id="fruits" class="box-product-item text-center">
                                <img class="product-img" src="<?= BASE_URL . $product['img_thumbnail'] ?>">
                                <h1 class="product-name"><?php echo $product['name'] ?></h1>
                                <p>Per Kg</p>
                                <h1 class="product-price"><?php echo $product['price_regular'] ?>$</h1>
                                <a href="<?= BASE_URL . '?act=cart-add&productID=' . $product['id'] . '&quantity=1' ?>"
                                    class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                            </div>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="pagination-wrap">
        <div class="container text-center">
            <ul>
                <li><a href="">Prev</a></li>
                <li><a href="">1</a></li>
                <li><a class="active" href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- footer -->
    <?php require "include/footer.php" ?>
    <!-- end footer -->

    <!-- link js -->
    <script src="Js/filters.js"></script>
    <!-- end link js -->
</body>

</html>