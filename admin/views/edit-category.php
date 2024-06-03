
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
    <title>Edit Category</title>
</head>

<body>
    <!-- header -->
        <?php require "../include/header-admin.php" ?>
        <div class="tablecell-pages text-center">
            <div class="container">
                <h1 class="text-title-pages">Edit Category</h1>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- ADD PRODUCT -->
    <div class="form-add">
        <div class="container">
            <div class="a-section-add">
                <div class="a-box">
                    <form action="" enctype="" method="POST">

                        <label for="">Name:</label>
                        <input type="text" name="name" value="<?php if(isset($_SESSION['edit'])){echo $_SESSION['edit']['name_cate'];} ?>">
                        <?php if (isset($_SESSION['errors']['name_cate'])): ?>
                            <a style="color:red"><i class="fa fa-warning" style="font-size:15px;color:red;margin-right:5px"></i><?= $_SESSION['errors']['name_cate']; ?></a>
                            <?php unset($_SESSION['errors']['name_cate']); ?>
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