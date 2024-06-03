<?php
// Gọi file connect database
require "connect.php";
// require "../user/function.php";
session_start();
// Lấy dữ liệu Category từ database
$sql = "SELECT * FROM `categores` ";
$data = $connect->query($sql);
$listCategory = $data->fetchAll(PDO::FETCH_ASSOC);
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
                                    <li><a href="addCategory.php">Add category</a></li>
                                    <li><a class="active" href="">List category</a></li>
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
                <h1 class="text-title-pages">List Category</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- hiện thị listCategory -->
    <div class="table-list">
        <div class="container">
            <table class="list-table">
                <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                </tr>
                <?php
                $stt = 0;
                foreach ($listCategory as $arrayListCate) {
                    $stt++;
                    ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $arrayListCate['name_cate'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <!-- End hiện thị listCategory -->
    <!-- footer -->
    <?php require "../include/footer-view-admin.php" ?>
    <!-- end footer -->
</body>

</html>