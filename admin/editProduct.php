<?php
session_start();
require "connect.php";
// Viết câu lệnh truy vấn danh mục
$sqlCategory = "SELECT * FROM `categores` ";
$data = $connect->query($sqlCategory);
$listCategory = $data->fetchAll(PDO::FETCH_ASSOC);
// End Viết câu lệnh truy vấn danh mục

// Viết câu lệnh truy vấn
$id = $_GET['id'];
$sql = "SELECT * FROM `product` WHERE `product`.`id_product` = '{$id}' ";
$data = $connect->query($sql);
$product = $data->fetch();
if (isset($_POST["btn-edit"])) {
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
    //Viết câu lệnh sửa 
    $sql = "UPDATE `product` SET `id_cate` = '{$category}',`maSanPham` = '{$maSP}',`image` = '{$image}',`name` = '{$nameProduct}',`price` = '{$priceProduct}',`note` = '{$noteProduct}' WHERE `product`.`id_product` = {$id} ";
    if ($connect->exec("$sql")) {
        setcookie("alert", "Cập nhật sản phẩm thành công!", time()+1, "/","", 0);
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
                                <a href="homeAdmin.php">Home</a>
                                <a href="addProduct.php">Add Product</a>
                                <a href="listProduct.php">List Product</a>
                                <a href="addCategory.php">Add Category</a>
                                <a href="listCategory.php">List Category</a>
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
                <h1 class="text-title-pages">Edit Product</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- ADD PRODUCT -->
    <div class="form-add">
        <div class="container">
            <div class="row">
                <div class="a-section-add">
                    <div class="a-box">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <label for="">Danh mục</label>
                            <select name="idCategory">
                                <?php
                                foreach ($listCategory as $arrayListCategory) {
                                    ?>
                                    <option value="<?php echo $arrayListCategory['id_cate'] ?>">
                                        <?php echo $arrayListCategory['name_cate'] ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <label for="">Mã sản phẩm:</label>
                            <input type="text" name="maSP" value="<?php echo $product['maSanPham'] ?>">
                            <label for="">Ảnh sản phẩm:</label>
                            <input type="file" name="image" value="<?php echo $product['image'] ?>">
                            <label for="">Tên sản phẩm:</label>
                            <input type="text" name="nameProduct" value="<?php echo $product['name'] ?>">
                            <label for="">Gía:</label>
                            <input type="number" name="priceProduct" value="<?php echo $product['price'] ?>">
                            <label for="">Ghi chú:</label>
                            <input type="text" name="noteProduct" value="<?php echo $product['note'] ?>">
                            <button class="btn-add" name="btn-edit" type="submit">Cập nhật</button>
                        </form>
                    </div>
                </div>
                <div class="a-section-add">
                    <div class="row">
                        <div class="box-left-30">
                            <div class="text-box-left-30">
                                <h1>Danh mục</h1>
                                <p><?php echo $product['id_cate'] ?></p>
                                <h1>Mã sản phẩm</h1>
                                <p><?php echo $product['maSanPham'] ?></p>
                                <h1>Tên sản phẩm</h1>
                                <p><?php echo $product['name'] ?></p>
                                <h1>Gía</h1>
                                <p><?php echo $product['price'] ?><span>$/kg</span></p>
                                <h1>Ghi chú</h1>
                                <p><?php echo $product['note'] ?></p>
                            </div>
                        </div>
                        <div class="box-right-70">
                            <img class="img-box-right-70" src="imageProduct/<?php echo $product['image'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ADD PRODUCT -->
    <!-- footer -->
    <?php require "../include/footer-view-client.php" ?>
    <!-- end footer -->
</body>

</html>