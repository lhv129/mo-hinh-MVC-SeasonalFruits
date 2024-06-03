<?php

session_start();
if(isset($_COOKIE["alert"])){
    $message = $_COOKIE["alert"];
    echo "<script type='text/javascript'>alert('$message');</script>";
};
// Require file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// Điều hướng
$act = $_GET['act'] ?? '/';

// Biến này cần khai báo được link cần đăng nhập mới vào được
$arrRouteNeedAuth = [
    'cart-add',
    'cart-list',
    'cart-inc',
    'cart-dec',
    'cart-del',
    'order-checkout',
    'order-purchase',
    'order-success',
];

// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check($act, $arrRouteNeedAuth);

match ($act) {
    '/' => homeIndex(),
    'product' => productDetail($_GET['id']),
    'cart-add'  => cartAdd($_GET['productID'], $_GET['quantity']),
    'cart' => cart(),
    
    'cart-inc'  => cartInc($_GET['productID']),
    'cart-dec'  => cartDec($_GET['productID']),
    'cart-del'  => cartDel($_GET['productID']),

    'about' => about(),
    'contact' => contact(),
    'news' => news(),
    'shop' => shop(),

    'checkout'  => orderCheckout(),
    'order-purchase'  => orderPurchase(),

    // Authen
    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),
    'register' => register(),
    'user-profile' => profile()
};

require_once './commons/disconnect-db.php';
