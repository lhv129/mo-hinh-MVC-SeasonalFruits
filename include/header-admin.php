<!-- header -->
<div class="background-client">
    <div class="wrapper-menu">
        <div class="container">
            <div class="main-menu-wrap text-center">
                <div class="row">
                    <div class="site-logo">
                        <a href="<?= BASE_URL_ADMIN ?>">
                            <h1 class="logo">LOGO</h1>
                        </a>
                    </div>
                    <div class="main-menu">
                        <nav>
                            <ul class="menu-header">
                                <li><a href="<?= BASE_URL_ADMIN ?>">Home</a></li>
                                <li><a href="<?= BASE_URL_ADMIN . '?act=user-list' ?>">User list</a></li>
                                <li><a href="<?= BASE_URL_ADMIN . '?act=create-product' ?>">Create product</a></li>
                                <li><a href="<?= BASE_URL_ADMIN . '?act=product-list' ?>">Product list</a></li>
                                <li><a href="<?= BASE_URL_ADMIN . '?act=create-category' ?>">Create category</a></li>
                                <li><a href="<?= BASE_URL_ADMIN . '?act=category-list' ?>">Category list</a></li>
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
                                        <a href="<?= BASE_URL_ADMIN . '?act=user-profile' ?>"><?= $user['name'] ?></a>
                                        <?php
                                        echo "<span> |</span>";
                                        ?>
                                        <a href="<?= BASE_URL . '?act=logout' ?>">Thoát</a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MENU TABLET,MOBILE -->
            <div class="main-menu-wrap__mobile">
                <div class="row space-between">
                    <div class="site-logo">
                        <a href="<?= BASE_URL_ADMIN ?>">
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
                        <li><a href="<?= BASE_URL_ADMIN ?>">Home</a></li>
                        <li><a href="<?= BASE_URL_ADMIN . '?act=user-list' ?>">User list</a></li>
                        <li><a href="<?= BASE_URL_ADMIN . '?act=create-product' ?>">Create product</a></li>
                        <li><a href="<?= BASE_URL_ADMIN . '?act=product-list' ?>">Product list</a></li>
                        <li><a href="<?= BASE_URL_ADMIN . '?act=create-category' ?>">Create category</a></li>
                        <li><a href="<?= BASE_URL_ADMIN . '?act=category-list' ?>">Category list</a></li>
                        <li>
                            <div class="log-mobile">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $user = $_SESSION['user'];
                                    if (isset($user)) {
                                        ?>
                                        <a href="<?= BASE_URL_ADMIN . '?act=user-profile' ?>"><i class='far fa-user'></i><?= $user['name'] ?></a>
                                        <?php
                                        echo "<span>|</span>";
                                        ?>
                                        <a href="<?= BASE_URL . '?act=logout' ?>">Thoát</a>
                                        <?php
                                    }
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