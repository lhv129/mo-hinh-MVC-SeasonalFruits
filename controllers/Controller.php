<?php

// HOME CONTROLLER
function homeIndex() {
    $products = listAll('products');
    require_once PATH_VIEW . 'home.php';
}
// END HOME CONTROLLER

// PRODUCT DETAIL CONTROLLER
function productDetail($id){
    $productDetail = showOne('products',$id);
    $category = listAll('catalogues');
    $products = listAll('products');
    require_once PATH_VIEW . 'productDetails.php';
}
// END PRODUCT DETAIL CONTROLLER

// CART CONTROLLER
function cartAdd($productID, $quantity = 0)
{
    // Kiểm tra xem là có product với cái ID kia không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // Kiểm tra xem trong bảng carts thì đã có bản ghi nào của user đang đăng nhập chưa
    // Có rồi thì lấy ra cartID, nếu chưa thì tạo mới
    $cartID = getCartID($_SESSION['user']['id']);

    $_SESSION['cartID'] = $cartID;

    // Add sản phẩm vào session cart: $_SESSION['cart'][$productID] = $product
    // Add tiếp sản phẩm vào thằng cart_items
    if (!isset($_SESSION['cart'][$productID])) {
        $_SESSION['cart'][$productID] = $product;
        $_SESSION['cart'][$productID]['quantity'] = $quantity;

        insert('cart_items', [
            'cart_id' => $cartID,
            'product_id' => $productID,
            'quantity' => $quantity
        ]);
    } else {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] += $quantity;

        updateQuantityByCartIDAndProductID($cartID, $productID, $qtyTMP);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart');
}

function cart()
{
    require_once PATH_VIEW . 'cart.php';
}

function cartInc($productID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // Tăng số lượng lên 1
    if (isset($_SESSION['cart'][$productID])) {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] += 1;

        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart');
}

function cartDec($productID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // giảm số lượng lên 1
    if (isset($_SESSION['cart'][$productID]) && $_SESSION['cart'][$productID]['quantity'] > 1) {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] -= 1;
        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);      
    }else{
        if (isset($_SESSION['cart'][$productID])) {
            unset($_SESSION['cart'][$productID]);
    
            deleteCartItemByCartIDAndProductID($_SESSION['cartID'], $productID);
        }
    }
    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart');
}

function cartDel($productID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // Xóa bản ghi trong session và cart_items
    if (isset($_SESSION['cart'][$productID])) {
        unset($_SESSION['cart'][$productID]);

        deleteCartItemByCartIDAndProductID($_SESSION['cartID'], $productID);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart');
}
// END CART CONTROLLER

// ODER CONTROLLER
function orderCheckout()
{
    require_once PATH_VIEW . 'checkOut.php';
}

function orderPurchase()
{
    if (!empty($_POST) && !empty($_SESSION['cart'])) {
        try {
            // Xử lý lưu vào bảng orders và order_items
            $data = $_POST;
            $data['user_id']            = $_SESSION['user']['id'];
            $data['total_bill']         = caculator_total_order(false);
            $data['status_delivery']    = STATUS_DELIVERY_WFC;
            $data['status_payment']     = STATUS_PAYMENT_UNPAID;

            $orderID = insert_get_last_id('orders', $data);

            foreach ($_SESSION['cart'] as $productID => $item) {
                $orderItem = [
                    'order_id'      => $orderID,
                    'product_id'    => $productID,
                    'quantity'      => $item['quantity'],
                    'price'         => $item['price_sale'] ?: $item['price_regular'],
                ];

                insert('order_items', $orderItem);
            }

            // Xử lý hậu
            deleteCartItemByCartID($_SESSION['cartID']);
            delete2('carts', $_SESSION['cartID']);

            unset($_SESSION['cart']);
            unset($_SESSION['cartID']);
        } catch (\Exception $e) {
            debug($e);
        }

        header('Location: ' . BASE_URL . '?act=order-success');
        exit();
    }

    header('Location: ' . BASE_URL);
}
// END ORDER CONTROLLER

// PAGE ABOUT
function about()
{
    require_once PATH_VIEW . 'about.php';
}
// END PAGE ABOUT

// PAGE CONTACT
function contact()
{
    require_once PATH_VIEW . 'contact.php';
}
// END CONTACT ABOUT

// PAGE NEWS
function news()
{
    require_once PATH_VIEW . 'news.php';
}
// END NEWS ABOUT
// PAGE NEWS
function shop()
{
    $products = listAll('products');
    require_once PATH_VIEW . 'shop.php';
}
// END NEWS ABOUT