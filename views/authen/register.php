<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- end icon -->
    <!-- css files -->
    <link rel="stylesheet" href="public/user.css">
    <!-- /css files -->

<body>
    <div class="header">
        <div class="container">
            <a href="<?= BASE_URL ?>">
                <h1 class="text-center">Logo</h1>
            </a>
            <div class="a-section">
                <div class="a-box">
                    <form method="post">
                        <h1 class="title">Tạo tài khoản của bạn</h1>
                        <div class="form-group">
                            <i class="far fa-user"></i>
                            <input class="form-input" type="text" name="name" placeholder="Username" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
                        </div>
                        <!-- Thông báo nếu lỗi validate username -->
                        <?php if (isset($_SESSION['errorRS']['name'])): ?>
                            <p class="check-input"><?= $_SESSION['errorRS']['name']; ?></p>
                            <?php unset($_SESSION['errorRS']['name']); ?>
                        <?php endif; ?>
                        <!--END Thông báo nếu lỗi validate EMAIL -->
                        <div class="form-group">
                            <i class="far fa-user"></i>
                            <input class="form-input" type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                        </div>
                        <!-- Thông báo nếu lỗi validate username -->      
                        <?php if (isset($_SESSION['errorRS']['email'])): ?>
                            <p class="check-input"><?= $_SESSION['errorRS']['email']; ?></p>
                            <?php unset($_SESSION['errorRS']['email']); ?>
                        <?php endif; ?>
                        <!--END Thông báo nếu lỗi validate EMAIL -->
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input class="form-input" type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">
                        </div>
                        <!-- Thông báo nếu lỗi validate password -->   
                        <?php if (isset($_SESSION['errorRS']['password'])): ?>
                            <p class="check-input"><?= $_SESSION['errorRS']['password']; ?></p>
                            <?php unset($_SESSION['errorRS']['password']); ?>
                        <?php endif; ?>
                        <!-- END Thông báo nếu lỗi validate password --> 
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input class="form-input" type="password" name="password2" placeholder="Confirm password" value="<?php if(isset($_POST['password2'])) echo $_POST['password2']; ?>">
                        </div>
                        <!-- Thông báo nếu lỗi validate passwordCF -->   
                        <?php if (isset($_SESSION['errorRS']['password2'])): ?>
                            <p class="check-input"><?= $_SESSION['errorRS']['password2']; ?></p>
                            <?php unset($_SESSION['errorRS']['password2']); ?>
                        <?php endif; ?>
                        
                        <?php if (isset($_SESSION['errorRS']['passwordCF'])): ?>
                            <p class="check-input"><?= $_SESSION['errorRS']['passwordCF']; ?></p>
                            <?php unset($_SESSION['errorRS']['passwordCF']); ?>
                        <?php endif; ?>
                        <!-- END Thông báo nếu lỗi validate passwordCF -->  
                        <input class="btn-submit" type="submit" name="btn-submit">
                        <div class="line2"></div>
                        <div class="row">
                            <p>Already have an account?</p>
                            <a href="<?= BASE_URL . '?act=login' ?>">
                                <p><span>Sign in</span></p>
                            </a>
                        </div>
                    </form>
                </div>
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