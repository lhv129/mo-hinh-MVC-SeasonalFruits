<?php
require "../admin/connect.php";
require "../user/function.php";
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT `image`,`name`,`price` FROM `product` WHERE `product`.`id_product` = '{$id}' ";
    $data = $connect->query($sql);
    $itemCart = $data->fetch();
    // showArray($itemCart);

    // ADD sản phẩm vào giỏ hàng
    $image = $itemCart["image"];
    $nameProduct = $itemCart['name'];
    $quantity = 1;
    $price = $itemCart['price'];
    $ttien = $price * $quantity;
    $ddsp = [$image, $nameProduct, $price, $quantity, $ttien];
    if (!isset($_SESSION['myCart'])) {
        $_SESSION['myCart'] = [];

    }
    array_push($_SESSION['myCart'], $ddsp);
    header('Location: cart.php');
}
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
    <title>Cart</title>
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
                                    <a href="" class=""><i class="fa fa-shopping-cart"></i></a>
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
                <p class="subtitle-pages">FRESH AND ORGANIC</p>
                <h1 class="text-title-pages">Cart</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- cart table -->
    <div class="cart-section">
        <div class="container">
            <div class="row space-between">
                <div class="cart-table-wrapper">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr>
                                <th></th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Gía</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <?php
                            $stt = 0;
                            foreach($_SESSION['myCart'] as $cart){
                                $stt++;
                        ?>
                        <tr>
                            <td><a href="deleteCart.php?id=<?php echo $stt ?>"><i class="fa fa-close"></i></a></td>
                            <td><img class="img-item-cart" src="../admin/imageProduct/<?php echo $cart[0] ?>"></td>
                            <td><?php echo $cart[1] ?></td>
                            <td><?php echo $cart[2] ?></td>
                            <td><?php echo $cart[3] ?></td>
                            <td><?php echo $cart[4] ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
                <div class="total-section">
                    <div class="total">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr>
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><strong>Tổng phụ:</strong></td>
                                <td>
                                    <?php
                                    $sum = 0;
                                    foreach($_SESSION['myCart'] as $cart){
                                        $sum += $cart[4];
                                    } 
                                    echo $sum;
                                    ?>$</td>
                            </tr>
                            <tr>
                                <td><strong>Phí Ship:</strong></td>
                                <td>45$</td>
                            </tr>
                            <tr>
                                <td><strong>Total:</strong></td>
                                <td><?php $total = $sum + 45; echo $total?>$</td>
                            </tr>
                        </table>
                    </div>
                    <div class="cart-button">
                        <a href="shop.php" class="boxed-btn">Update Cart</a>
                        <a href="checkOut.php" class="boxed-btn">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart table -->
    <!-- footer -->
    <?php require "../include/footer-view-client.php" ?>
    <!-- end footer -->
</body>

</html>