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
    <title>Home</title>
</head>

<body>
    <!-- header -->
    <div class="background">
        <div class="blur">
            <div class="wrapper-menu">
                <div class="container">
                    <!-- MENU PC -->
                    <div class="main-menu-wrap text-center">
                        <div class="row space-between">
                            <div class="site-logo">
                                <a href="">
                                    <h1 class="logo">LOGO</h1>
                                </a>
                            </div>
                            <div class="main-menu">
                                <nav>
                                    <ul class="menu-header">
                                        <li><a class="active" href="">Home</a></li>
                                        <li><a href="<?= BASE_URL . '?act=about' ?>">About</a></li>
                                        <li>
                                            <a href="">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= BASE_URL . '?act=about' ?>">About</a></li>
                                                <li><a href="<?= BASE_URL . '?act=contact' ?>">Contact</a></li>
                                                <li><a href="<?= BASE_URL . '?act=cart' ?>">Cart</a></li>
                                                <li><a href="<?= BASE_URL . '?act=news' ?>">News</a></li>
                                                <li><a href="<?= BASE_URL . '?act=shop' ?>">Shop</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= BASE_URL . '?act=news' ?>">News</a></li>
                                        <li><a href="<?= BASE_URL . '?act=contact' ?>">Contact</a></li>
                                        <li>
                                            <a href="">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= BASE_URL . '?act=shop' ?>">Shop</a></li>
                                                <li><a href="<?= BASE_URL . '?act=checkout' ?>">Check Out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-icons">
                                <div class="row">
                                    <div class="log">
                                        <i class="far fa-user"></i>
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            $user = $_SESSION['user'];
                                            if (isset($user)) {
                                                ?>
                                                <a href="<?= BASE_URL . '?act=user-profile' ?>"><?= $user['name'] ?></a>
                                                <?php
                                                echo "<span> |</span>";
                                                ?>
                                                <a href="<?= BASE_URL . '?act=logout' ?>">Thoát</a>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <a href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a>
                                            <?php
                                            echo "<span>|</span>";
                                            ?>
                                            <a href="<?= BASE_URL . '?act=register' ?>">Đăng ký</a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="box-icons">
                                        <a href="<?= BASE_URL . '?act=cart' ?>" class=""><i
                                                class="fa fa-shopping-cart"></i></a>
                                        <a href="" class=""><i class='fa fa-search'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MENU PC -->
                    <!-- MENU TABLET,MOBILE -->
                    <div class="main-menu-wrap__mobile">
                        <div class="row space-between">
                            <div class="site-logo">
                                <a href="">
                                    <h1 class="logo">LOGO</h1>
                                </a>
                            </div>
                            <div class="site-menu space-right">
                                <i class='fa fa-search'></i>
                                <div class="box-icon-menu">
                                    <label for="nav-mobile-input">
                                        <div class="menu-icon" onclick="myFunction(this)">
                                            <div class="bar1"></div>
                                            <div class="bar2"></div>
                                            <div class="bar3"></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" hidden autocomplete="off" class="nav__input" id="nav-mobile-input">
                        <nav class="main-menu__mobile">
                            <ul>
                                <li><a class="active" href="">Home</a></li>
                                <li><a href="<?= BASE_URL . '?act=about' ?>">About</a></li>
                                <li><a href="<?= BASE_URL . '?act=news' ?>">News</a></li>
                                <li><a href="<?= BASE_URL . '?act=contact' ?>">Contact</a></li>
                                <li><a href="<?= BASE_URL . '?act=shop' ?>">Shop</a></li>
                                <li><a href="<?= BASE_URL . '?act=checkout' ?>">Check Out</a></li>
                                <li><a href="<?= BASE_URL . '?act=cart' ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                <li>
                                    <div class="log-mobile">
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            $user = $_SESSION['user'];
                                            if (isset($user)) {
                                                ?>
                                                <a href="<?= BASE_URL . '?act=user-profile' ?>"><i class='far fa-user'></i><?= $user['name'] ?></a>
                                                <?php
                                                echo "<span>|</span>";
                                                ?>
                                                <a href="<?= BASE_URL . '?act=logout' ?>">Thoát</a>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <a href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a>
                                            <?php
                                            echo "<span>|</span>";
                                            ?>
                                            <a href="<?= BASE_URL . '?act=register' ?>">Đăng ký</a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- END MENU TABLET,MOBILE -->
                </div>
            </div>
            <div class="tablecell text-center">
                <div class="container">
                    <p class="subtitle">Fresh & Organic</p>
                    <h1 class="text-title">Delicious Seasonal Fruits</h1>
                    <a href="<?= BASE_URL . '?act=shop' ?>" class="collection-btn">Fruit Collection</a>
                    <a href="<?= BASE_URL . '?act=contact' ?>" class="contact-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- list section -->
    <div class="list-section">
        <div class="container">
            <div class="row space-between">
                <div class="box-section">
                    <div class="box-section-left">
                        <div class="list-icon">
                            <img class="list-icon-img" src="public/images/icon/icons8-shipping-50.png">
                        </div>
                    </div>
                    <div class="box-section-right">
                        <h3 class="box-section-title">Free Shipping</h3>
                        <p class="box-section-text">When order over $75</p>
                    </div>
                </div>
                <div class="box-section">
                    <div class="box-section-left">
                        <div class="list-icon">
                            <img class="list-icon-img" src="public/images/icon/icons8-call-50.png">
                        </div>
                    </div>
                    <div class="box-section-right">
                        <h3 class="box-section-title">24/7 Support</h3>
                        <p class="box-section-text">Get support all day</p>
                    </div>
                </div>
                <div class="box-section">
                    <div class="box-section-left">
                        <div class="list-icon">
                            <img class="list-icon-img" src="public/images/icon/icons8-refund-50.png">
                        </div>
                    </div>
                    <div class="box-section-right">
                        <h3 class="box-section-title">Refund</h3>
                        <p>Get refund within 3 days!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- product section -->
    <div class="product-section">
        <div class="container">
            <div class="text-center">
                <h2><span class="active">Our </span>Product<h2>
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
    </div>
    <!-- end section -->
    <!-- banner -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="image-column">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price"><strong>30%</strong><br>"off per kg"</span>
                            </div>
                        </div>
                        <img class="img" src="public/images/dealofthemonth.jpg">
                    </div>
                </div>
                <div class="content-column">
                    <h2><span class="active">Deal</span> of the month</h2>
                    <h4>HIKAN STRWABERRY</h1>
                        <p>Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae,
                            minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusant</p>
                        <div class="time-counter row">
                            <div class="count-column">
                                <div class="inner"><span class="count">00</span>Days</div>
                            </div>
                            <div class="count-column">
                                <div class="inner"><span class="count">00</span>Hours</div>
                            </div>
                            <div class="count-column">
                                <div class="inner"><span class="count">00</span>Mins</div>
                            </div>
                            <div class="count-column">
                                <div class="inner"><span class="count">00</span>Secs</div>
                            </div>
                        </div>
                        <a href="<?= BASE_URL . '?act=shop' ?>" class="cart-btn"><i class="fa fa-shopping-cart"></i>Shop
                            Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- our news -->
    <div class="ourNews">
        <div class="container">
            <div class="text-center">
                <h2><span class="active">Our </span>News<h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas<Br>itaque
                            eveniet beatae optio</p>
            </div>
            <div class="row space-between">
                <div class="new-box">
                    <a href="<?= BASE_URL . '?act=news' ?>">
                        <div class="new-box-img one"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>You will vainly look for fruit on it in autumn.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                    src="public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                    src="public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="<?= BASE_URL . '?act=news' ?>" class="read-btn">Read more<span>></span></a>
                    </div>
                </div>
                <div class="new-box">
                    <a href="<?= BASE_URL . '?act=news' ?>">
                        <div class="new-box-img two"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>A man's worth has its season, like tomato.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                    src="public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                    src="public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="<?= BASE_URL . '?act=news' ?>" class="read-btn">Read more<span>></span></a>
                    </div>
                </div>
                <div class="new-box">
                    <a href="<?= BASE_URL . '?act=news' ?>">
                        <div class="new-box-img three"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>Good thoughts bear good fresh juicy fruit.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                    src="public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                    src="public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="<?= BASE_URL . '?act=news' ?>" class="read-btn">Read more<span>></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our news -->
    <!-- footer -->
    <?php require "include/footer.php" ?>
    <!-- end footer -->
    <script src="Js/filters.js"></script>
</body>

</html>