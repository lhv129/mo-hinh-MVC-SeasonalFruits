<!-- header -->
<div class="background-client">
    <div class="wrapper-menu">
        <div class="container">
            <div class="main-menu-wrap text-center">
                <div class="row space-between">
                    <div class="site-logo">
                        <a href="<?= BASE_URL ?>">
                            <h1 class="logo">LOGO</h1>
                        </a>
                    </div>
                    <div class="main-menu">
                        <nav>
                            <ul class="menu-header">
                                <li><a href="<?= BASE_URL ?>">Home</a></li>
                                <li><a href="<?= BASE_URL . '?act=about' ?>">About</a></li>
                                <li>
                                    <a href="">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="">About</a></li>
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
                                    <a href="<?= BASE_URL ?>">Đăng ký</a>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="box-icons">
                                <a href="<?= BASE_URL . '?act=cart' ?>" class=""><i class="fa fa-shopping-cart"></i></a>
                                <a href="" class=""><i class='fa fa-search'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MENU TABLET,MOBILE -->
            <div class="main-menu-wrap__mobile">
                <div class="row space-between">
                    <div class="site-logo">
                        <a href="<?= BASE_URL ?>">
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
                        <li><a href="<?= BASE_URL ?>">Home</a></li>
                        <li><a href="">About</a></li>
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
                                        <a href="<?= BASE_URL . '?act=user-profile' ?>"><i
                                                class='far fa-user'></i><?= $user['name'] ?></a>
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
                                    echo "<a href='user/register.php'>Đăng ký</a>";
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