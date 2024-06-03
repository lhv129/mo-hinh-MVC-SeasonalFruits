
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
    <title>Edit Product</title>
</head>

<body>
    <!-- header -->
        <?php require "../include/header-admin.php" ?>
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
            <div class="a-section-add">
                <div class="a-box">
                    <form action="" enctype="multipart/form-data" method="POST">
                        <label for="">Danh mục</label>
                        <select name="catalogue_id">
                            <?php foreach ($category as $listCategory) {
                                ?>
                                <option value="<?php echo $listCategory['id'] ?>" <?php if($listCategory['id'] == $_SESSION['edit']['catalogue_id']) echo "selected"; ?> >
                                    <?php echo $listCategory['name_cate'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>

                        <label for="">Mã sản phẩm:</label>
                        <input type="text" name="code" value="<?php if(isset($_SESSION['edit']['code'])) echo $_SESSION['edit']['code']; ?>">
                        <?php if (isset($_SESSION['errors']['code'])): ?>
                            <a style="color:red"><i class="fa fa-warning" style="font-size:15px;color:red;margin-right:5px"></i><?= $_SESSION['errors']['code']; ?></a>
                            <?php unset($_SESSION['errors']['code']); ?>
                        <?php endif; ?>

                        <label for="">Ảnh sản phẩm:</label>
                        <input type="file" name="img_thumbnail" value="">
                        <?php if (isset($_SESSION['errors']['img_thumbnail'])): ?>
                            <a style="color:red"><i class="fa fa-warning" style="font-size:15px;color:red;margin-right:5px"></i><?= $_SESSION['errors']['img_thumbnail']; ?></a>
                            <?php unset($_SESSION['errors']['img_thumbnail']); ?>
                        <?php endif; ?>

                        <label for="">Tên sản phẩm:</label>
                        <input type="text" name="name" value="<?php if(isset($_SESSION['edit']['name'])) echo $_SESSION['edit']['name']; ?>">
                        <?php if (isset($_SESSION['errors']['name'])): ?>
                            <a style="color:red"><i class="fa fa-warning" style="font-size:15px;color:red;margin-right:5px"></i><?= $_SESSION['errors']['name']; ?></a>
                            <?php unset($_SESSION['errors']['name']); ?>
                        <?php endif; ?>
                        
                        <label for="">Gía:</label>
                        <input type="number" name="price_regular" value="<?php if(isset($_SESSION['edit']['price_regular'])) echo $_SESSION['edit']['price_regular']; ?>">
                        <?php if (isset($_SESSION['errors']['price_regular'])): ?>
                            <a style="color:red"><i class="fa fa-warning" style="font-size:15px;color:red;margin-right:5px"></i><?= $_SESSION['errors']['price_regular']; ?></a>
                            <?php unset($_SESSION['errors']['price_regular']); ?>
                        <?php endif; ?>

                        <label for="">Ghi chú:</label>
                        <input type="text" name="content" value="<?php if(isset($_SESSION['edit']['content'])) echo $_SESSION['edit']['content']; ?>">
                        <?php if (isset($_SESSION['errors']['content'])): ?>
                            <a style="color:red"><i class="fa fa-warning" style="font-size:15px;color:red;margin-right:5px"></i><?= $_SESSION['errors']['content']; ?></a>
                            <?php unset($_SESSION['errors']['content']); ?>
                        <?php endif; ?>

                        <button class="btn-add" name="btn-add" type="submit">Submit</button>
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