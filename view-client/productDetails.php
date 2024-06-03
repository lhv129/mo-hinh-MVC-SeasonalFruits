<?php
    require "../admin/connect.php";
    session_start();
    // Viết câu lệnh truy vấn cho Related Products
    $sqlRP = "SELECT * FROM `product`";
    $data = $connect->query($sqlRP);
    $product = $data->fetchAll(PDO::FETCH_ASSOC);
    // End viết câu lệnh truy vấn cho Related Products
    // Viết câu lệnh truy vấn Product Details
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM `product` WHERE `product`.`id_product` = '{$id}' ";
        $data = $connect->query($sql);
        $productDetails = $data->fetchAll(PDO::FETCH_ASSOC);
    }
    // end Viết câu lệnh truy vấn Product Details
    // Viết câu lệnh truy vấn categorys
    $sqlCate = "SELECT * FROM `categores` ";
    $data = $connect->query($sqlCate);
    $category = $data->fetchAll(PDO::FETCH_ASSOC);
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
    <title>Product Details</title>
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
                                            <li><a href="../user/cart.php">Cart</a></li>
                                            <li><a href="../user/checkOut.php">Check Out</a></li>
                                            <li><a href="news.php">News</a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                        </ul> 
                                    </li>
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="shop.php">Shop</a></li>
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
                                    <a href="../user/cart.php" class=""><i class="fa fa-shopping-cart"></i></a>
                                    <a href="" class=""><i class='fa fa-search'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <?php
                    foreach($productDetails as $arrayProduct){
                ?>
                    <div class="productDetails-img">
                        <img src="../admin/imageProduct/<?php echo $arrayProduct['image'] ?>">
                    </div>
                    <div class="productDetails-content">
                        <div class="box-content">
                            <h1><?php echo $arrayProduct['name'] ?></h1>
                            <p><strong>Mã sản phẩm: </strong><?php echo $arrayProduct['maSanPham'] ?></p>
                            <p><strong>Categories: </strong>
                            <?php 
                            foreach($category as $arrayCate){
                                if($arrayCate['id_cate'] == $arrayProduct['id_cate']){
                                    echo $arrayCate['name_cate'];
                                }
                            }?>
                            </p>
                            <p>Per Kg</p>
                            <h1><?php echo $arrayProduct['price'] ?><span>$</span></h1>
                            <p><?php echo $arrayProduct['note'] ?></p>
                            <form action="" method="POST">
                                <input type="number" name="quantity" placeholder="1">
                                <a href="cart.php?id=<?php echo $arrayProduct['id_product'] ?>" name="btn-add" class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                            </form>
                        </div>
                    </div>
                <?php
                    } 
                ?>
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
            <div class="row space-between">
                <?php
                    $stt = 0;
                    foreach ($product as $listProduct) {
                        $stt++;
                        if ($stt > 3) {
                            break;
                        } else {
                ?>
                    <a href="productDetails.php?id=<?php echo $listProduct['id_product'] ?>">
                        <div id="berry" class="box-product-item text-center">
                            <img class="product-img" src="../admin/imageProduct/<?php echo $listProduct['image'] ?>">
                            <h1 class="product-name"><?php echo $listProduct['name'] ?></h1>
                            <p>Per Kg</p>
                            <h1 class="product-price"><?php echo $listProduct['price'] ?>$</h1>
                            <a href="cart.php?id=<?php echo $listProduct['id_product'] ?>" class="cart-btn"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </div>
                    </a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    <!-- end More Product -->
    <!-- footer -->
    <?php require "../include/footer-view-client.php" ?>
    <!-- end footer -->
</body>

</html>