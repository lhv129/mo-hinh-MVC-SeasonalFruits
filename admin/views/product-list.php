<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="../public/main.css">
    <title>Product List</title>
</head>

<body>
    <?php require "../include/header-admin.php" ?>
    <div class="tablecell-pages text-center">
        <div class="container">
            <h1 class="text-title-pages">Product List</h1>
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
                    <th>Ghi chú</th>
                    <th>Chức năng</th>
                </tr>
                <?php
                $stt = 0;
                foreach ($products as $list) {

                    $stt++;
                    ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td>
                            <?php
                            foreach ($category as $listCategory) {
                                if ($list['catalogue_id'] == $listCategory['id']) {
                                    echo $listCategory['name_cate'];
                                }
                            }
                            ?>
                        </td>
                        <td><?php echo $list['code'] ?></td>
                        <td><img class="imageProduct" src="<?= BASE_URL . $list['img_thumbnail'] ?>"></td>
                        <td><?php echo $list['name'] ?></td>
                        <td><?php echo $list['price_regular'] ?><span>$/kg</span></td>
                        <td><?php echo $list['content'] ?></td>
                        <td>
                            <a href="<?= BASE_URL_ADMIN . '?act=edit-product&id=' . $list['id'] ?>"><button
                                    class="btn-chucNang">Sửa</button></a>
                            <a href="<?= BASE_URL_ADMIN . '?act=delete-product&id=' . $list['id'] ?>"><button
                                    onclick="return confirm('Bạn có chắc muốn xóa không')"
                                    class="btn-chucNang">Xóa</button></a>
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