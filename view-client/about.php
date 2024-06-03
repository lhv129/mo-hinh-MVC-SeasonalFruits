<?php
session_start();
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
    <title>About</title>
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
                                    <li><a class="active" href="">About</a></li>
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
                                    <a href="cart.php" class=""><i class="fa fa-shopping-cart"></i></a>
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
                <p class="subtitle-pages">WE SALE FRESH FRUITS</p>
                <h1 class="text-title-pages">About Us</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- featured section -->
    <div class="featured-background">
        <div class="container">
            <div class="row space-between">
                <div class="featured-text">
                    <h2>Why <span class="active">SeasonalFruits</span></h2>
                    <div class="row space-between">
                        <div class="box-section">
                            <div class="box-section-left">
                                <div class="list-icon">
                                    <img class="list-icon-img" src="../public/images/icon/icons8-shipping-50.png">
                                </div>
                            </div>
                            <div class="box-section-right">
                                <h3 class="box-section-title">Home Delivery</h3>
                                <p class="box-section-text">sit voluptatem accusantium dolore mque laudantium, totam rem
                                    aperiam, eaque ipsa quae ab illo.</p>
                            </div>
                        </div>
                        <div class="box-section">
                            <div class="box-section-left">
                                <div class="list-icon">
                                    <img class="list-icon-img" src="../public/images/icon/icons8-call-50.png">
                                </div>
                            </div>
                            <div class="box-section-right">
                                <h3 class="box-section-title">Best Price</h3>
                                <p class="box-section-text">sit voluptatem accusantium dolore mque laudantium, totam rem
                                    aperiam, eaque ipsa quae ab illo.</p>
                            </div>
                        </div>
                        <div class="box-section">
                            <div class="box-section-left">
                                <div class="list-icon">
                                    <img class="list-icon-img" src="../public/images/icon/icons8-refund-50.png">
                                </div>
                            </div>
                            <div class="box-section-right">
                                <h3 class="box-section-title">Custom Box</h3>
                                <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae
                                    ab illo.</p>
                            </div>
                        </div>
                        <div class="box-section">
                            <div class="box-section-left">
                                <div class="list-icon">
                                    <img class="list-icon-img" src="../public/images/icon/icons8-refund-50.png">
                                </div>
                            </div>
                            <div class="box-section-right">
                                <h3 class="box-section-title">Quick Refund</h3>
                                <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae
                                    ab illo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-background-img"></div>
            </div>
        </div>
    </div>
    <!-- end featured section -->
    <!-- SHOP BANNER -->
    <div class="shop-banner">
        <div class="container">
            <h3>December sale is on!<br>with big <span class="active">Discount...</span></h3>
            <div class="sale-percent">
                <span>Sale!<Br>Upto</span>
                <span class="active">50%</span>
                <span>off</span>
            </div>
            <a href="shop.php"><button class="btn-shopNow">Shop Now</button></a>
        </div>
    </div>
    <!-- END SHOP BANNER -->
    <!-- OUR TEAM -->
    <div class="ourTeam">
        <div class="container text-center">
            <div class="section-title">
                <h1>Our <span class="active">Team</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beataeoptio.</p>
            </div>
            <div class="row space-between">
                <div class="single-team-item">
                    <div class="team-item-bg one">
                        <ul>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul class="social-link-team">
                    </div>
                    <h4>Jimmy Doe<span>Farmer</span></h4>
                </div>
                <div class="single-team-item">
                    <div class="team-item-bg two">
                    <ul>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul class="social-link-team">
                    </div>
                    <h4>Marry Doe<span>Farmer</span></h4>
                </div>
                <div class="single-team-item">
                    <div class="team-item-bg three">
                    <ul>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul class="social-link-team">
                    </div>
                    <h4>Simon Joe<span>Farmer</span></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- END OUR TEAM -->
    <!-- footer -->
    <?php require "../include/footer-view-client.php" ?>
    <!-- end footer -->
</body>

</html>