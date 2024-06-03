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
    <title>Product Details</title>
</head>

<body>
    <?php require "include/header.php" ?>

    <div class="tablecell-pages text-center">
        <div class="container">
            <p class="subtitle-pages">SEE MORE DETAILS</p>
            <h1 class="text-title-pages">Product Details</h1>
        </div>
    </div>
    </div>
    <!-- end header -->
    <!-- productDetails -->
    <div class="productDetails">
        <div class="container">
            <div class="row">
                <div class="productDetails-img">
                    <img src="<?= BASE_URL . $productDetail['img_thumbnail'] ?>">
                </div>
                <div class="productDetails-content">
                    <div class="box-content">
                        <h1><?php echo $productDetail['name'] ?></h1>
                        <p><strong>Mã sản phẩm: </strong><?php echo $productDetail['code'] ?></p>
                        <p><strong>Categories: </strong>
                            <?php 
                                foreach($category as $list){
                                    if($productDetail['catalogue_id'] == $list['id']){
                                        echo $list['name_cate'];
                                    }
                                } 
                            ?>
                        </p>
                        <p>Per Kg</p>
                        <h1><?php echo $productDetail['price_regular'] ?><span>$</span></h1>
                        <p><?php echo $productDetail['content'] ?></p>
                        <form action="" method="POST">
                            <input type="number" name="quantity" placeholder="1">
                            <a href="<?= BASE_URL . '?act=cart-add&productID=' . $productDetail['id'] . '&quantity=1' ?>"
                                name="btn-add" class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end productDetails -->
    <!-- More Product -->
    <div class="container">
        <div class="text-center">
            <h2><span class="active">Related </span>Products<h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas<Br>itaque
                        eveniet beatae optio</p>
        </div>
        <div class="row space-center">
            <?php
            $stt = 0;
            foreach ($products as $product) {
                if ($product['catalogue_id'] == 2) {
                    $stt++;
                    if ($stt > 3) {
                        break;
                    } else {
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
            }
            ?>
        </div>
    </div>
    <!-- footer -->
    <?php require "include/footer.php" ?>
    <!-- end footer -->
</body>

</html>