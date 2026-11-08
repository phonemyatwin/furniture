<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php include "components/css.php"; ?>
</head>

<body>
    <?php include "components/header.php"; ?>
    <?php include "components/navbar.php"; ?>
    <section class="heading">
        <h3>product detail</h3>
        <p><a href="index.php">home</a> / <a href="shop.php">shop</a> / <span>detail</span></p>
    </section>
    <section class="product__detail">
        <div class="image">
            <img src="images/product-1.png" alt="modern furniture">
        </div>
        <div class="content">
            <h3>modern furniture</h3>
            <div class="price">40000 MMK</div>
            <div class="quantity">quantity: 50</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit labore facere non autem soluta tempora natus, sequi obcaecati esse officia aspernatur impedit dignissimos ut porro praesentium similique numquam magnam.</p>
            <a href="shop.php" class="btn">back to shop</a>
        </div>
    </section>
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>