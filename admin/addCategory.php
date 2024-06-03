<?php
    session_start();
    // Gọi file connect database
    require "connect.php";
    // end gọi file connect
    if (isset($_POST["btn-submit"])){
        $nameCategory = $_POST['nameCategory'];
        $sql = "INSERT INTO `categores` (`name_cate`) VALUES ('{$nameCategory}') ";
        if ($connect->exec($sql)) {
            header("Location: listCategory.php");
        }
    }
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
                                    <li><a href="homeAdmin.php">Home</a></li>
                                    <li><a href="addProduct.php">Add product</a></li>
                                    <li><a href="listProduct.php">List Product</a></li>
                                    <li><a class="active" href="">Add category</a></li>
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
                <h1 class="text-title-pages">Add Category</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- ADD CATEGORY -->
    <div class="form-add">
        <div class="container">
            <div class="a-section-add">
                <div class="a-box">
                    <form action="" method="POST">
                        <label for="">Tên danh mục:</label>
                        <input type="text" name="nameCategory">
                        <button class="btn-add" name="btn-submit" type="submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End add category -->
    <!-- footer -->
    <?php require "../include/footer-view-admin.php" ?>
    <!-- end footer -->
</body>

</html>