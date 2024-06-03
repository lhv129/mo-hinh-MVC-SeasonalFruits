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
    <title>Category List</title>
</head>

<body>
<?php require "../include/header-admin.php" ?>
    <div class="tablecell-pages text-center">
        <div class="container">
            <h1 class="text-title-pages">Category List</h1>
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
                    <th>Chức năng</th>
                </tr>
                <?php
                $stt = 0;
                foreach ($category as $list) {
                    $stt++;
                    ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $list['name_cate'] ?></td>
                        <td>
                            <a href="<?= BASE_URL_ADMIN . '?act=edit-category&id=' . $list['id'] ?>"><button class="btn-chucNang">Sửa</button></a>
                            <a href="<?= BASE_URL_ADMIN . '?act=delete-category&id=' . $list['id'] ?>"><button  onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn-chucNang">Xóa</button></a>
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