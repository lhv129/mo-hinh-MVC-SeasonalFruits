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
    <title>News</title>
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
                                    <li><a class="active" href="">News</a></li>
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
                <p class="subtitle-pages">ORGANIC INFORMATION</p>
                <h1 class="text-title-pages">News Article</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- NEW ARTICLE -->
    <div class="ourNews">
        <div class="container">
            <div class="text-center">
                <h2><span class="active">Our </span>News<h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas<Br>itaque
                            eveniet beatae optio</p>
            </div>
            <div class="row space-between">
                <div class="new-box">
                    <a href="">
                        <div class="new-box-img one"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>You will vainly look for fruit on it in autumn.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="" class="read-btn">Read more<span>></span></a>
                    </div>
                </div>
                <div class="new-box">
                    <a href="">
                        <div class="new-box-img two"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>A man's worth has its season, like tomato.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                src="../public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                src="../public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="" class="read-btn">Read more<span>></span></a>
                    </div>
                </div>
                <div class="new-box">
                    <a href="">
                        <div class="new-box-img three"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>Good thoughts bear good fresh juicy fruit.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="" class="read-btn">Read more<span>></span></a>
                    </div>
                </div>
                <div class="new-box">
                    <a href="">
                        <div class="new-box-img four"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>Good thoughts bear good fresh juicy fruit.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="" class="read-btn">Read more<span>></span></a>
                    </div>
                </div>
                <div class="new-box">
                    <a href="">
                        <div class="new-box-img five"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>Good thoughts bear good fresh juicy fruit.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="" class="read-btn">Read more<span>></span></a>
                    </div>
                </div>
                <div class="new-box">
                    <a href="">
                        <div class="new-box-img six"></div>
                    </a>
                    <div class="new-text-box">
                        <h1>Good thoughts bear good fresh juicy fruit.</h1>
                        <p class="blog-meta">
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/user-solid.svg">Admin</span>
                            <span class="box-blog"><img class="icon-blog"
                                    src="../public/images/icon/calendar-days-solid.svg">12 September 2020</span>
                        </p>
                        <p class="note">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent
                            vitae mattis nunc, egestas viverra eros.</p>
                        <a href="" class="read-btn">Read more<span>></span></a>
                    </div>
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
    </div>                              
    <!-- END NEW ARTICLE -->
    <!-- footer -->
    <?php require "../include/footer-view-client.php" ?>
    <!-- end footer -->
</body>

</html>