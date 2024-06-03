<?php
    session_start();
    require "connect.php";
    $sql = "SELECT * FROM `product` INNER JOIN `categores` ON `product`.`id_cate` = `categores`.`id_cate`";
    $data = $connect->query($sql);
    $listProduct = $data->fetchAll(PDO::FETCH_ASSOC);
    // Thông báo cập add,update thành công
    if(isset($_COOKIE["alert"])){
        $message = $_COOKIE["alert"];
        echo "<script type='text/javascript'>alert('$message');</script>";
    };
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
                                    <li><a class="active" href="">List Product</a></li>
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
                <h1 class="text-title-pages">List Product</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- hiện thị listProduct -->
    <div class="table-list">
        <div class="container">
            <table class="list-table">
                <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Mã sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Gía</th>
                    <th style="width:30%;">Ghi chú</th>
                    <th>Chức năng</th>
                </tr>
                <?php
                $stt = 0;
                foreach ($listProduct as $arrayListProduct) {
                    $stt++;
                    ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $arrayListProduct['name_cate'] ?></td>
                        <td><?php echo $arrayListProduct['maSanPham']?></td>
                        <td><img class="imageProduct" src="imageProduct/<?php echo $arrayListProduct['image'] ?>"></td>
                        <td><?php echo $arrayListProduct['name'] ?></td>
                        <td><?php echo $arrayListProduct['price'] ?><span>$/kg</span></td>
                        <td><?php echo $arrayListProduct['note'] ?></td>
                        <td>
                            <a href="editProduct.php?id=<?php echo $arrayListProduct['id_product']?>"><button class="btn-chucNang">Sửa</button></a>
                            <a href="deleteProduct.php?id=<?php echo $arrayListProduct['id_product']?>"><button class="btn-chucNang">Xóa</button></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <!-- End hiện thị listProduct -->
    <!-- footer -->
    <?php require "../include/footer-view-admin.php" ?>
    <!-- end footer -->
</body>

</html>