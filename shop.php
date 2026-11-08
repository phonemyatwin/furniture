<?php
// Session start
require_once __DIR__ . '/components/session_config.php';

// Database connect
require_once __DIR__ . '/components/connection.php';

// User session check
require_once __DIR__ . '/components/user_session_check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body>
    <?php require_once __DIR__ . '/components/header.php'; ?>
    <?php require_once __DIR__ . '/components/navbar.php'; ?>
    <section class="heading">
        <h3>our shop</h3>
        <p><a href="index.php">home</a> / <span>shop</span></p>
    </section>
    <section class="products">
        <div class="box__container">
            <div class="box">
                <div class="icons">
                    <a href="product_detail.php?id=1" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="images/product-1.png" alt="">
                </div>
                <div class="content">
                    <div class="price">40000 MMK</div>
                    <h3>modern furniture</h3>
                    <div class="quantity">quantity: 50</div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="product_detail.php?id=2" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="images/product-2.png" alt="">
                </div>
                <div class="content">
                    <div class="price">40000 MMK</div>
                    <h3>modern furniture</h3>
                    <div class="quantity">quantity: 50</div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="product_detail.php?id=3" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="images/product-3.png" alt="">
                </div>
                <div class="content">
                    <div class="price">40000 MMK</div>
                    <h3>modern furniture</h3>
                    <div class="quantity">quantity: 50</div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="product_detail.php?id=4" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="images/product-4.png" alt="">
                </div>
                <div class="content">
                    <div class="price">40000 MMK</div>
                    <h3>modern furniture</h3>
                    <div class="quantity">quantity: 50</div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="product_detail.php?id=5" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="images/product-5.png" alt="">
                </div>
                <div class="content">
                    <div class="price">40000 MMK</div>
                    <h3>modern furniture</h3>
                    <div class="quantity">quantity: 50</div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="product_detail.php?id=6" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="images/product-6.png" alt="">
                </div>
                <div class="content">
                    <div class="price">40000 MMK</div>
                    <h3>modern furniture</h3>
                    <div class="quantity">quantity: 50</div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="product_detail.php?id=7" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="images/product-7.png" alt="">
                </div>
                <div class="content">
                    <div class="price">40000 MMK</div>
                    <h3>modern furniture</h3>
                    <div class="quantity">quantity: 50</div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="product_detail.php?id=8" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="images/product-8.png" alt="">
                </div>
                <div class="content">
                    <div class="price">40000 MMK</div>
                    <h3>modern furniture</h3>
                    <div class="quantity">quantity: 50</div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>