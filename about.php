<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body>
    <?php require_once __DIR__ . '/components/header.php'; ?>
    <?php require_once __DIR__ . '/components/navbar.php'; ?>
    <section class="heading">
        <h3>about us</h3>
        <p><a href="index.php">home</a> / <span>about</span></p>
    </section>
    <section class="about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <span>welcome to our shop</span>
            <h3>we make your home more astonishing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit labore facere non autem soluta tempora natus, sequi obcaecati esse officia aspernatur impedit dignissimos ut porro praesentium similique numquam magnam.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam sequi illo cum expedita, eius laboriosam? Blanditiis quisquam, iure nisi, ex amet odit obcaecati eaque voluptatibus porro repudiandae sit libero debitis!</p>
        </div>
    </section>
    <section class="services">
        <div class="box__container">
            <div class="box">
                <img src="images/serv-1.png" alt="">
                <h3>product selling</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus id necessitatibus atque quod dicta. Esse perferendis sit vel quam deleniti voluptate. Provident molestias quibusdam recusandae quas illum ratione natus hic.</p>
            </div>
            <div class="box">
                <img src="images/serv-2.png" alt="">
                <h3>product designing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus id necessitatibus atque quod dicta. Esse perferendis sit vel quam deleniti voluptate. Provident molestias quibusdam recusandae quas illum ratione natus hic.</p>
            </div>
            <div class="box">
                <img src="images/serv-3.png" alt="">
                <h3>24 / 7 support</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus id necessitatibus atque quod dicta. Esse perferendis sit vel quam deleniti voluptate. Provident molestias quibusdam recusandae quas illum ratione natus hic.</p>
            </div>
        </div>
    </section>
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>