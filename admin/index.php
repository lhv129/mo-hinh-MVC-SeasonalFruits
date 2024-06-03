<?php
if(isset($_COOKIE["alert"])){
    $message = $_COOKIE["alert"];
    echo "<script type='text/javascript'>alert('$message');</script>";
};
session_start();

// Require file trong commons
require_once '../commons/env.php';
require_once '../commons/helper.php';
require_once '../commons/connect-db.php';
require_once '../commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

// Điều hướng
$act = $_GET['act'] ?? '/';


match ($act) {
    '/' => dashBoard(),
    'user-list' => userList(),
    'user-delete' => userDelete($_GET['id']),

    'create-product' => pageCreateProduct(),
    'edit-product' => edit($_GET['id']),
    'delete-product' => productDelete($_GET['id']),
    'product-delete' => productDelete($_GET['id']),
    'product-list' => productList(),


    'create-category' => createCategoryPage(),
    'category-list' => categoryList(),
    'edit-category' => editCategoryPage($_GET['id']),
    'delete-category' => categoryDelete($_GET['id']),

    'user-profile' => profileAdmin()
};