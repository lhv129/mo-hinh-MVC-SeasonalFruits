<?php
    // Start file connect database
    require "../admin/connect.php";
    session_start();
    // End file connect database
    // Thông báo đăng ký thành công
    if(isset($_COOKIE["alert"])){
        $message = $_COOKIE["alert"];
        echo "<script type='text/javascript'>alert('$message');</script>";
    };
    // Start lấy dữ liệu user từ database
    $sql = "SELECT * FROM `user`";
    $data = $connect->query($sql);
    $user = $data->fetchAll(PDO::FETCH_ASSOC);
    // End lấy dữ liệu user từ database
    // start validate login
    if(isset($_POST['btn-submit'])){
        $error = [];
        if(empty($_POST['username'])){
            $error['username'] = 'Mời bạn nhập tên đăng nhập';
        }else{
            $username = $_POST['username'];
        }
        if(empty($_POST['password'])){
            $error['password'] = 'Mời bạn nhập password';
        }else{
            $password = $_POST['password'];
        }
        foreach ($user as $listUser) {
            if($username == $listUser['user_name'] && $password == $listUser['password']){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                if($listUser['role'] == 0){
                    header("Location: ../index.php");
                }else{
                    header("Location: ../admin/homeAdmin.php");
                }
            }
        }
    }
    // end validate login
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
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
                        <h1 class="title">Đăng nhập</h1>
                        <div class="form-group">
                            <i class="far fa-user"></i>
                            <input class="form-input" type="text" name="username" placeholder="Username">
                        </div>
                        <p class="check-input"><?php if(isset($error['username'])) echo $error['username']; ?></p>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <input class="form-input" type="password" name="password" placeholder="Password">
                        </div>
                        <p class="check-input"><?php if(isset($error['password'])) echo $error['password']; ?></p>
                        <a class="forgot" href="logout.php">Forgot password?</a>
                        <input class="btn-submit" type="submit" name="btn-submit">
                    </form>
                </div>
                <div class="box-text text-center">
                    <div class="line"></div>
                    <p class="text2">New to SeasonalFruits</p>
                    <div class="line"></div>
                </div>
                <a href="register.php"><button class="btn-create">Create yor account</button></a>
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