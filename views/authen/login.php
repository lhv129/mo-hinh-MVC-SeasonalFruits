<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- end icon -->
    <!-- css files -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/user.css">
    <!-- /css files -->

<body>
    <div class="header">
        <div class="container">
            <a href="<?= BASE_URL ?>">
                <h1 class="text-center">Logo</h1>
            </a>
            <div class="a-section">
                <div class="a-box">
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <i class="fa fa-warning" style="font-size:25px;color:red;margin-right:10px"></i><?= $_SESSION['error'] ?>
                        </div>
                        <?php unset($_SESSION['error']); ?>
                    <?php endif; ?>
                    <form method="post">
                        <h1 class="title">Đăng nhập</h1>
                        <div class="form-group">
                            <i class="far fa-user"></i>
                            <input class="form-input" type="text" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input class="form-input" type="password" name="password" placeholder="Password" >
                        </div>
                        <a class="forgot" href="logout.php">Forgot password?</a>
                        <input class="btn-submit" type="submit" name="btn-submit">
                    </form>
                </div>
                <div class="box-text text-center">
                    <div class="line"></div>
                    <p class="text2">New to SeasonalFruits</p>
                    <div class="line"></div>
                </div>
                <a href="<?= BASE_URL . '?act=register' ?>"><button class="btn-create">Create yor account</button></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="a-section">
                <div class="row text-center">
                    <div class="box-text-footer">
                        <a href="">Conditions of Use</a>
                    </div>
                    <div class="box-text-footer">
                        <a href="">Privacy Notice</a>
                    </div>
                    <div class="box-text-footer">
                        <a href="">Help And Support</a>
                    </div>
                </div>
                <p class="text-footer">© 1996-2024, SeasonalFruits.com, Inc. or its affiliates</p>
            </div>
        </div>
    </div>
</body>

</html>