<?php

function unsetSession(){
    unset($_SESSION['data']);
    unset($_SESSION['category']);
}
function checkAdmin(){
    if($_SESSION['user']['role'] == 0){
        header('Location: ' . BASE_URL);
        exit();
    }
}

function dashBoard(){
    checkAdmin();
    unsetSession();
    require_once PATH_VIEW_ADMIN . 'dashboard.php';
}

// Users Controller
function userList(){
    checkAdmin();
    unsetSession();
    $users = listAll('users');
    require_once PATH_VIEW_ADMIN . 'user-list.php';
}

// Xóa đi 1 user
function userDelete($id){
    delete2('users',$id);
    setcookie("alert", "Xóa thành công!", time()+1, "/","", 0);
    header("Location: " . BASE_URL_ADMIN . '?act=user-list');
    exit();
}
// End Users Controller

// Products Controller

// Thêm 1 sản phẩm mới
function pageCreateProduct(){
    checkAdmin();
    $category = listAll('catalogues');
    if ($_POST) {
        createProduct();
    }
    require_once PATH_VIEW_ADMIN . 'create-product.php';
}

function createProduct(){
    if(!empty($_POST)){
        $data = [
            'catalogue_id' => $_POST['catalogue_id'] ?? null,
            'code' => $_POST['code'] ?? null,
            'img_thumbnail' => $_FILES['img_thumbnail'] ?? null,
            'name' => $_POST['name'],
            'price_regular' => $_POST['price_regular'] ?? null,
            'content' => $_POST['content'] ?? null,
        ];

        $error = validateCreateProduct($data);
        if(!empty($error)){
            $_SESSION['errors'] = $error;
            $_SESSION['data'] = $data;

            header('Location: ' . BASE_URL_ADMIN. '?act=create-product');
            exit();
        }

        $img_thumbnail = $_FILES['img_thumbnail'] ?? null;
        if(!empty($img_thumbnail)){
            $data['img_thumbnail'] = upload_file($img_thumbnail, 'uploads/products/');
            
        }
    }
    insert('products', $data);
    setcookie("alert", "Thêm thành công!", time()+1, "/","", 0);
    header("Location: " . BASE_URL_ADMIN . '?act=product-list');
    exit();
}
// End

// Hiện thị danh sách sản phẩm
function productList(){
    checkAdmin();
    unsetSession();
    $products = listAll('products');
    $category = listAll('catalogues');
    require_once PATH_VIEW_ADMIN . 'product-list.php';
}
// End

// Sửa (update) sản phẩm
function edit($id){
    checkAdmin();
    $category = listAll('catalogues'); 
    $_SESSION['edit'] = showOne('products',$id);
    
    if ($_POST) {
        editProduct($id);
    }
    require_once PATH_VIEW_ADMIN . 'edit-product.php';
}
function editProduct($id){
    if(!empty($_POST)){
        $edit = [
            'catalogue_id' => $_POST['catalogue_id'] ?? null,
            'code' => $_POST['code'] ?? null,
            'img_thumbnail' => $_FILES['img_thumbnail'] ?? null,
            'name' => $_POST['name'],
            'price_regular' => $_POST['price_regular'] ?? null,
            'content' => $_POST['content'] ?? null,
        ];

        $error = validateCreateProduct($edit);
        if(!empty($error)){
            $_SESSION['errors'] = $error;
            $_SESSION['edit'] = $edit;
            header('Location: ' . BASE_URL_ADMIN . '?act=edit-product&id=' . $id);
            exit();
        }

        $img_thumbnail = $_FILES['img_thumbnail'] ?? null;
        if(!empty($img_thumbnail)){
            $edit['img_thumbnail'] = upload_file($img_thumbnail, 'uploads/products/');
            
        }
    }
    update('products',$id,$edit);
    setcookie("alert", "Sửa thành công!", time()+1, "/","", 0);
    header("Location: " . BASE_URL_ADMIN . '?act=product-list');
    exit();
}

// End

// Xóa 1 sản phẩm
function productDelete($id){
    delete2('products',$id);
    setcookie("alert", "Xóa thành công!", time()+1, "/","", 0);
    header("Location: " . BASE_URL_ADMIN . '?act=product-list');
    exit();
}
// End
function validateCreateProduct($data){
    $error = [];
    if(empty($data['code'])){
        $error['code'] = 'Bạn cần nhập mã sản phẩm';
    }
    if(empty($data['name'])){
        $error['name'] = 'Bạn cần nhập tên sản phẩm';
    }
    if(empty($data['price_regular'])){
        $error['price_regular'] = 'Bạn cần nhập giá';
    }
    if(empty($data['content'])){
        $error['content'] = 'Bạn cần nhập ghi chú';
    }
    // Validate ảnh
    $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];
    if($data['img_thumbnail']['size'] > 250000 ){
        $error['img_thumbnail'] = 'Ảnh sản phẩm có dung lượn quá lớn';
    }else if(!in_array($data['img_thumbnail']['type'], $typeImage)){
        $error['img_thumbnail'] = 'Chỉ chấp nhận file: PNG, JPG, JPEG';
    }
    return $error;
}
// End Products Controller

// Category Controller
function createCategoryPage(){
    checkAdmin();
    unsetSession();
    if ($_POST) {
        createCategory();
    }
    require_once PATH_VIEW_ADMIN . 'create-category.php';
}

function createCategory(){
    if(!empty($_POST)){
        $category = [
            'name_cate' => $_POST['name'] ?? null
        ];
        $error = validateCategory($category);
        if(!empty($error)){
            $_SESSION['errors'] = $error;
            $_SESSION['category'] = $category;
            header('Location: ' . BASE_URL_ADMIN. '?act=create-category');
            exit();
        }
    }
    insert('catalogues',$category);
    setcookie("alert", "Thêm thành công!", time()+1, "/","", 0);
    header("Location: " . BASE_URL_ADMIN . '?act=category-list');
    exit();
}
function categoryList(){
    checkAdmin();
    unsetSession();
    $category = listAll('catalogues');
    require_once PATH_VIEW_ADMIN . 'category-list.php';
}

function editCategoryPage($id){
    checkAdmin();
    $category = listAll('catalogues'); 
    $_SESSION['edit'] = showOne('catalogues',$id);
    if ($_POST) {
        editCategory($id);
    }
    require_once PATH_VIEW_ADMIN . 'edit-category.php';
}

function editCategory($id){
    if(!empty($_POST)){
        $category = [
            'name_cate' => $_POST['name'] ?? null
        ];
        $error = validateCategory($category);
        if(!empty($error)){
            $_SESSION['errors'] = $error;
            $_SESSION['category'] = $category;
            header('Location: ' . BASE_URL_ADMIN. '?act=edit-category&id=' . $id);
            exit();
        }
    }
    update('catalogues',$id,$category);
    setcookie("alert", "Cập nhật thành công!", time()+1, "/","", 0);
    header("Location: " . BASE_URL_ADMIN . '?act=category-list');
    exit();
}

function categoryDelete($id){
    delete2('catalogues',$id);
    setcookie("alert", "Xóa thành công!", time()+1, "/","", 0);
    header("Location: " . BASE_URL_ADMIN . '?act=category-list');
    exit();
}

function validateCategory($data){
    $error = [];
    $category = listAll('catalogues');
    if(empty($_POST['name'])){
        $error['name_cate'] = "Không được để trống";
    }
    foreach($category as $check){
        if($_POST['name'] == $check['name_cate']){
            $error['name_cate'] = "Tên danh mục này đã được tạo";
        }
    }
    return $error;
}


// End Category Controller

// Profile
function profileAdmin(){
    checkAdmin();
    unsetSession();
    require_once PATH_VIEW_ADMIN . 'profile.php';
}