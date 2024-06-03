<?php
session_start();
require "../admin/connect.php";
// require "function.php";
$sql = "SELECT * FROM `product` ";
$data = $connect->query($sql);
$product = $data->fetchAll(PDO::FETCH_ASSOC);
// showArray($product);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../public/main.css">
    <title>Shop</title>
</head>

<body>
    <!-- header -->
    <div class="background-client">
        <div class="wrapper-menu">
            <div class="container">
                <div class="main-menu-wrap text-center">
                    <div class="row">
                        <div class="site-logo">
                            <a href="../index.php">
                                <h1 class="logo">LOGO</h1>
                            </a>
                        </div>
                        <div class="main-menu">
                            <nav>
                                <ul class="menu-header">
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li>
                                        <a href="">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                            <li><a href="news.php">News</a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a class="active" href="">Shop</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-icons">
                            <div class="row">
                                <div class="log">
                                    <?php
                                    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                                        echo "<a href=''>{$_SESSION['username']}</a>";
                                    } else {
                                        echo "<a href='../user/login.php'>Đăng nhập</a>";
                                    }
                                    ?>
                                    <span>|</span>
                                    <?php
                                    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                                        echo "<a href='../user/logout.php'>Thoát</a>";
                                    } else {
                                        echo "<a href='../user/register.php'>Đăng ký</a>";
                                    }
                                    ?>
                                </div>
                                <div class="box-icons">
                                    <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a href=""><i class='fa fa-search'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="row">
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
            <div class="row">
                <?php
                foreach ($product as $listProduct) {
                    if ($listProduct['id_cate'] == 2) {
                        ?>
                        <div id="berry" class="box-product-item text-center">
                            <a href="productDetails.php?id=<?php echo $listProduct['id_product'] ?>">
                                <img class="product-img" src="../admin/imageProduct/<?php echo $listProduct['image'] ?>">
                                <h1 class="product-name"><?php echo $listProduct['name'] ?></h1>
                                <p>Per Kg</p>
                                <h1 class="product-price"><?php echo $listProduct['price'] ?>$</h1>
                            </a>
                            <a href="cart.php?id=<?php echo $listProduct['id_product'] ?>" class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </div>
                        <?php
                    }
                }
                ?>
                <?php
                foreach ($product as $listProduct) {
                    if ($listProduct['id_cate'] == 3) {
                        ?>
                        <div id="lemon" class="box-product-item text-center">
                            <a href="productDetails.php?id=<?php echo $listProduct['id_product'] ?>">
                                <img class="product-img" src="../admin/imageProduct/<?php echo $listProduct['image'] ?>">
                                <h1 class="product-name"><?php echo $listProduct['name'] ?></h1>
                                <p>Per Kg</p>
                                <h1 class="product-price"><?php echo $listProduct['price'] ?>$</h1>
                            </a>
                            <a href="cart.php?id=<?php echo $listProduct['id_product'] ?>" class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </div>
                        <?php
                    }
                }
                ?>
                <?php
                foreach ($product as $listProduct) {
                    if ($listProduct['id_cate'] == 4) {
                        ?>
                        <div id="fruits" class="box-product-item text-center">
                            <a href="productDetails.php?id=<?php echo $listProduct['id_product'] ?>">
                                <img class="product-img" src="../admin/imageProduct/<?php echo $listProduct['image'] ?>">
                                <h1 class="product-name"><?php echo $listProduct['name'] ?></h1>
                                <p>Per Kg</p>
                                <h1 class="product-price"><?php echo $listProduct['price'] ?>$</h1>
                            </a>
                            <a href="cart.php?id=<?php echo $listProduct['id_product'] ?>" name="btn-add" class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </div>
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
    <?php require "../include/footer-view-client.php" ?>
    <!-- end footer -->

    <!-- link js -->
    <script src="../Js/filters.js"></script>
    <!-- end link js -->
</body>

</html>