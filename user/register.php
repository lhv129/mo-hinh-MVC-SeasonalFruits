<?php
    require "../admin/connect.php";

    // start validate
    if(isset($_POST["btn-submit"])){
        $error=[];
        if(empty($_POST['username'])){
            $error['username'] = "Bạn cần nhập UserName ";
            
        }else{
            $username = $_POST['username'];
        }
        if(empty($_POST['email'])){
            $error['email'] = "Bạn cần nhập Email";
        }else{
            $email = $_POST['email'];
        }
        if(empty($_POST['password'])){
            $error['password'] = "Password không được để trống";
        }else{
            $password = $_POST['password'];
        }
        if(empty($_POST['password2'])){
            $error['password2'] = "Pasword không được để trống";
        }else{
            $password2 = $_POST['password2'];
        }
        if(isset($password) && (isset($password2))){
            if($password != $password2){
                $error['password2'] = "Mật khẩu không trùng nhau";
            }else{
                $passConfirm = $password;
                $sql = "INSERT INTO `user` (`user_name`,`email`,`password`) VALUES ('{$username}','{$email}','{$passConfirm}') ";
                if ($connect->exec($sql)){
                    setcookie("alert", "Đăng ký thành công!", time()+1, "/","", 0);
                    header("location: login.php");
                }
            }
        }
    }
    // end validate
?>
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
    <link rel="stylesheet" href="../public/user.css">
    <!-- /css files -->

<body>
    <div class="header">
        <div class="container">
            <a href="../index.php">
                <h1 class="text-center">Logo</h1>
            </a>
            <div class="a-section">
                <div class="a-box">
                    <form method="post">
                        <h1 class="title">Tạo tài khoản của bạn</h1>
                        <div class="form-group">
                            <i class="far fa-user"></i>
                            <input class="form-input" type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>">
                        </div>
                        <p class="check-input"><?php if(isset($error['username'])) echo $error['username']; ?></p>
                        <div class="form-group">
                            <i class="far fa-user"></i>
                            <input class="form-input" type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
                        </div>
                        <p class="check-input"><?php if(isset($error['email'])) echo $error['email']; ?></p>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input class="form-input" type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>">
                        </div>
                        <p class="check-input"><?php if(isset($error['password'])) echo $error['password']; ?></p>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input class="form-input" type="password" name="password2" placeholder="Confirm password" value="<?php if(isset($_POST['password2'])) echo $_POST['password2'] ?>">
                        </div>
                        <p class="check-input"><?php if(isset($error['password2'])) echo $error['password2']; ?></p>
                        <input class="btn-submit" type="submit" name="btn-submit">
                        <div class="line2"></div>
                        <div class="row">
                            <p>Already have an account?</p>
                            <a href="login.php"><p><span>Sign in</span></p></a>
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
                        <a href="">Help</a>
                    </div>
                </div>
                <p class="text-footer">© 1996-2024, SeasonalFruits.com, Inc. or its affiliates</p>
            </div>
        </div>
    </div>
</body>

</html>