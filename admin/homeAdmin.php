<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="../public/main.css">
    <title>Admin Page</title>
</head>

<body>
    <!-- header -->
    <div class="background-client">
        <div class="wrapper-menu">
            <div class="container">
                <div class="main-menu-wrap text-center">
                    <div class="row">
                        <div class="site-logo">
                            <a href="homeAdmin.php">
                                <h1 class="logo">LOGO</h1>
                            </a>
                        </div>
                        <div class="main-menu">
                            <nav>
                                <ul class="menu-header">
                                    <li><a class="active" href="">Home</a></li>
                                    <li><a href="addProduct.php">Add product</a></li>
                                    <li><a href="listProduct.php">List Product</a></li>
                                    <li><a href="addCategory.php">Add category</a></li>
                                    <li><a href="listCategory.php">List category</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-icons">
                            <div class="row">
                                <div class="log">
                                    <i class="far fa-user"></i>
                                    <a href="">
                                        <?php 
                                        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                                            echo "{$_SESSION['username']}";
                                        ?>
                                        <?php
                                        } else {
                                            header("Location:../user/login.php");
                                        } 
                                        ?>
                                    </a>
                                    <span>|</span>
                                    <a href="../user/logout.php">Thoát</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tablecell-pages text-center">
            <div class="container">
                <h1 class="text-title-pages">Admin Page</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- footer -->
    <?php require "../include/footer-view-admin.php" ?>
    <!-- end footer -->
</body>

</html>