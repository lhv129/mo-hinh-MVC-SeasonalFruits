<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="public/main.css">
    <title>Checkout</title>
</head>

<body>
    <!-- HEADER -->
    <?php require "include/header.php" ?>
    <!-- End header -->
    <div class="tablecell-pages text-center">
        <div class="container">
            <p class="subtitle-pages">FRESH AND ORGANIC</p>
            <h1 class="text-title-pages">Check Out Product</h1>
        </div>
    </div>
    </div>
    <!-- end header -->
    <!-- checkout-section  -->
    <div class="checkout-section">
        <div class="container">
            <div class="row space-between">
                <div class="checkout-accordion-wrap">
                    <div class="card-single-accordion">
                        <button onclick="card()"><i class="fa fa-check"></i>
                            <h3>Billing Address</h3>
                        </button>
                        <div class="card-body one">
                            <form method="POST">
                                <input type="text" name="name" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <input type="text" name="address" placeholder="Address">
                                <input type="number" name="phone" placeholder="Phone">
                                <textarea type="text" name="note" placeholder="Say something"></textarea>
                            </form>
                        </div>
                    </div>
                    <div class="card-single-accordion">
                        <button onclick="card2()"><i class="fa fa-check"></i>
                            <h3>Shipping Address</h3>
                        </button>
                        <div class="card-body two">
                            Your shipping address form is here.
                        </div>
                    </div>
                    <div class="card-single-accordion">
                        <button onclick="card3()"><i class="fa fa-check"></i>
                            <h3>Card Details</h3>
                        </button>
                        <div class="card-body three">
                            Your card details goes here.
                        </div>
                    </div>
                </div>
                <div class="order-details-wrap">
                    <table class="order-details">
                        <thead>
                            <tr>
                                <th>Your order Details</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody class="order-details-body">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $myCart) {
                                    ?>
                                    <tr>
                                        <td><?php echo $myCart['name'] ?></td>
                                        <td>
                                            <?php
                                            $totalProduct = $myCart['price_regular'] * $myCart['quantity'];
                                            echo $totalProduct;
                                            ?>$
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                        <tbody class="checkout-details">
                            <tr>
                                <td>Subtotal</td>
                                <td>
                                    <?php
                                    $subTotal = 0;
                                    if (!empty($_SESSION['cart'])):
                                        foreach ($_SESSION['cart'] as $item): ?>
                                            <?php
                                            $totalProduct = ($item['price_sale'] ?: $item['price_regular']) * $item['quantity'];
                                            number_format($totalProduct);
                                            $subTotal += $totalProduct;
                                        endforeach;
                                    endif;
                                    echo number_format($subTotal);
                                    ?>$
                                </td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>45$</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>
                                    <?php
                                    $total = $subTotal + 45;
                                    echo $total;
                                    ?>$
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="overlay">
                        <div id="text" class="checkout-confirm">
                            <div class="container">
                                <img src="public/images/checked.png">
                                <h2>Đặt hàng thành công!</h2>
                                <p>Cảm ơn quý khách đã mua hàng của Seasonal Fruits</p>
                                <a href="
                                    <?php
                                        // Khi ấn hoàn tất mua hàng, thì những sản phẩm trong giỏ hàng sẽ bị mất, và quay lại trang chủ 
                                        if(isset($_SESSION['cart'])){
                                            unset($_SESSION['cart']);
                                            echo  BASE_URL;
                                        }
                                    ?>"><button>Về trang chủ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn-place" onclick="on()">Place Order</button>
                </div>
            </div>
        </div>


    </div>
    <!-- footer -->
    <?php require "include/footer.php" ?>
    <!-- end footer -->

    <!-- link js -->
    <script src="Js/filters.js"></script>
    <!-- end link js -->
</body>

</html>