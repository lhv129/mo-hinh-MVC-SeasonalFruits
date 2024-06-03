<?php

function authenShowFormLogin()
{
    if ($_POST) {
        authenLogin();
    }

    require_once PATH_VIEW . 'authen/login.php';
}
function authenLogin()
{
    $usersList = listAll('users'); // Lấy dữ liệu trong Database
    
    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);
    //Validate đăng nhập
    if (empty($_POST['email']) && empty($_POST['password'])) {
        $_SESSION['error'] = 'Mời bạn nhập email và password!';
        header('Location: ' . BASE_URL . '?act=login');
        exit();
    }
    if (empty($_POST['email']) && !empty($_POST['password'])) {
        $_SESSION['error'] = 'Mời bạn nhập email!';
        header('Location: ' . BASE_URL . '?act=login');
        exit();
    }
    if (empty($_POST['password'] && !empty($_POST['email']))) {
        $_SESSION['error'] = 'Mời bạn nhập password!';
        header('Location: ' . BASE_URL . '?act=login');
        exit();
    }
    $email = $_POST['email']; // Lấy dữ liệu từ ô input
    $password = $_POST['password']; // Lấy dữ liệu từ ô input
    // Check email có tồn tại không
    if (empty($user)) {
        $_SESSION['error'] = 'Email không tồn tại!';
    }
    // Check email và password có trùng khớp với tài khoản đã tạo
    foreach ($usersList as $check) {
        if ($email == $check['email'] && $password != $check['password']) {
            $_SESSION['error'] = 'Password bạn vừa nhập chưa chính xác!';
        }
        if ($email == $check['email'] && $password == $check['password']) {
            $_SESSION['user'] = $user;
            $roleCheck = $_SESSION['user']['role'];
            if ($roleCheck == 0) {
                setcookie("alert", "Đăng nhập thành công!", time()+1, "/","", 0);
                header('Location: ' . BASE_URL);
                exit();
            } else {
                setcookie("alert", "Đăng nhập thành công!", time()+1, "/","", 0);
                header('Location: ' . BASE_URL_ADMIN);
                exit();
            }
        }
    }

}

// REGISTER CONTROLLER
function register()
{
    if ($_POST) {
        authenRegister();
    }
    require_once PATH_VIEW . 'authen/register.php';
}

function authenRegister()
{
    $usersList = listAll('users');
    if (empty($_POST['name'])) {
        $_SESSION['errorRS']['name'] = "Bạn cần nhập UserName ";
    }
    //Validate username không được để trống và không được dài hơn 8 kí tự
    $roleUserName = preg_replace('/[^a-zA-Z0-9]/m', '', $_POST['name']);
    $checkUserName = strlen($roleUserName);
    if ($checkUserName > 8) {
        $_SESSION['errorRS']['name'] = "Username không được dài hơn 8 kí tự";
    }
    //Email không được để trống
    if (empty($_POST['email'])) {
        $_SESSION['errorRS']['email'] = "Bạn cần nhập Email";
    }
    //END VALIDATE EMAIL
    // Check xem username có bị trùng lặp không
    foreach ($usersList as $listCheck) {
        if ($_POST['name'] == $listCheck['name']) {
            // Nếu có thì hiện ra thông báo
            $_SESSION['errorRS']['name'] = "Username của bạn đã bị trùng vui lòng đặt tên khác";
        } else {
            $name = $_POST['name'];
        }
        if ($_POST['email'] == $listCheck['email']) {
            // Nếu có thì hiện ra thông báo
            $_SESSION['errorRS']['email'] = "Email của bạn đã được dùng vui lòng dùng email khác";
        } else {
            $email = $_POST['email'];
        }
    }
    //Password không được để trống
    if (empty($_POST['password'])) {
        $_SESSION['errorRS']['password'] = "Password không được để trống";
    } else {
        $password = $_POST['password'];
    }
    if (empty($_POST['password2'])) {
        $_SESSION['errorRS']['password2'] = "Pasword không được để trống";
    } else {
        $password2 = $_POST['password2'];
    }
    // Validate Password và confirmPassword trùng nhau
    if (isset($password) && (isset($password2))) {
        if ($password != $password2) {
            $_SESSION['errorRS']['passwordCF'] = "Mật khẩu không trùng nhau";
        } else {
            $passConfirm = $password;
            insert('users', [
                'name' => $name,
                'email' => $email,
                'password' => $passConfirm
            ]);
            setcookie("alert", "Đăng ký thành công!", time()+1, "/","", 0);
            header('Location: ' . BASE_URL . '?act=login');
        }
    }
}

function profile(){
    require_once PATH_VIEW . 'authen/profile.php';
}


// END REGISTER CONTROLLER
function authenLogout()
{
    if (!empty($_SESSION['user'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL);
    exit();
}

