<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="public/main.css">
    <title>Cart</title>
</head>

<body>
    <!-- HEADER -->
    <?php require "include/header.php" ?>
    <!-- End header -->
    <div class="tablecell-pages text-center">
        <div class="container">
            <p class="subtitle-pages">FRESH AND ORGANIC</p>
            <h1 class="text-title-pages">Cart</h1>
        </div>
    </div>
    </div>
    <!-- end header -->
    <!-- cart table -->
    <div class="cart-section">
        <div class="container">
            <div class="row space-between">
                <div class="cart-table-wrapper">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr>
                                <th></th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <?php
                        if (!empty($_SESSION['cart'])):
                            foreach ($_SESSION['cart'] as $item): ?>
                                <tr>
                                    <td><a href="<?= BASE_URL . '?act=cart-del&productID=' . $item['id'] ?>"
                                            onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-close"></i></a></td>
                                    <td>
                                        <img src="<?= BASE_URL . $item['img_thumbnail'] ?>" class="img-item-cart" alt="">
                                    </td>
                                    <td><?= $item['name'] ?></t>
                                    <td><?= number_format($item['price_sale'] ?: $item['price_regular']) ?></td>
                                    <td>
                                        <a href="<?= BASE_URL . '?act=cart-dec&productID=' . $item['id'] ?>"
                                            class="btn btn-danger">-</a>
                                        <span class="btn btn-warning"><?= $item['quantity'] ?></span>

                                        <a href="<?= BASE_URL . '?act=cart-inc&productID=' . $item['id'] ?>"
                                            class="btn btn-success">+</a>
                                    </td>
                                    <td>
                                        <?php
                                        $subTotal = ($item['price_sale'] ?: $item['price_regular']) * $item['quantity'];
                                        echo number_format($subTotal);
                                        ?>$
                                    </td>
                                </tr>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </table>
                </div>
                <div class="total-section">
                    <div class="total">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr>
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><strong>Subtotal:</strong></td>
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
                                <td><strong>Shipping:</strong></td>
                                <td>45$</td>
                            </tr>
                            <tr>
                                <td><strong>Total:</strong></td>
                                <td>
                                    <?php
                                    $total = $subTotal + 45;
                                    echo $total;
                                    ?>$
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="cart-button">
                        <a href="<?= BASE_URL . '?act=shop' ?>" class="boxed-btn">Update Cart</a>
                        <a href="<?= BASE_URL . '?act=checkout' ?>" class="boxed-btn">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart table -->
    <!-- footer -->
    <?php require "include/footer.php" ?>
    <!-- end footer -->
</body>

</html>