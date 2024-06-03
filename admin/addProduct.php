<?php
// Gọi file connect database
require "connect.php";
// End Gọi file connect database
session_start();
//Lấy dữ liệu danh mục
$sql = "SELECT * FROM `categores` ";
$data = $connect->query($sql);
$listCategory = $data->fetchAll(PDO::FETCH_ASSOC);
// End lấy dữ liệu danh mục
// Thêm dữ liệu từ form vào database
if (isset($_POST['btn-add'])) {
    $category = $_POST['idCategory'];
    $maSP = $_POST['maSP'];
    $nameProduct = $_POST['nameProduct'];
    $priceProduct = $_POST['priceProduct'];
    $noteProduct = $_POST['noteProduct'];
    $image = $_FILES['image']['name'];
    $target_dir = "imageProduct/";
    $target_file = baseName($_FILES['image']['name']);
    $upLoad = $target_dir . $target_file;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $upLoad)) {
        echo "Upload thành công";
    } else {
        echo "Upload lỗi";
    }
    //Viết câu lệnh truy vấn
    $sql = "INSERT INTO `product` (`id_cate`,`maSanPham`,`image`,`name`,`price`,`note`) VALUES ('{$category}','{$maSP}','{$image}','{$nameProduct}','{$priceProduct}','{$noteProduct}')";
    if($connect->exec($sql)) {
        setcookie("alert", "Thêm sản phẩm thành công!", time()+1, "/","", 0);
        header("Location: listProduct.php");
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
                                    <li><a class="active" href="">Add product</a></li>
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
                <h1 class="text-title-pages">Add Product</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- ADD PRODUCT -->
    <div class="form-add">
        <div class="container">
            <div class="a-section-add">
                <div class="a-box">
                    <form action="" enctype="multipart/form-data" method="POST">
                        <label for="">Danh mục</label>
                        <select name="idCategory">
                            <?php foreach ($listCategory as $arrayListCate) {
                                ?>
                                <option value="<?php echo $arrayListCate['id_cate'] ?>"><?php echo $arrayListCate['name_cate'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <label for="">Mã sản phẩm:</label>
                        <input type="text" name="maSP">
                        <label for="">Ảnh sản phẩm:</label>
                        <input type="file" name="image">
                        <label for="">Tên sản phẩm:</label>
                        <input type="text" name="nameProduct">
                        <label for="">Gía:</label>
                        <input type="number" name="priceProduct">
                        <label for="">Ghi chú:</label>
                        <input type="text" name="noteProduct">
                        <button class="btn-add" name="btn-add" type="submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END ADD PRODUCT -->
    <!-- footer -->
    <?php require "../include/footer-view-admin.php" ?>
    <!-- end footer -->
</body>

</html>