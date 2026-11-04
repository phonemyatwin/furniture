<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php include "components/css.php"; ?>
</head>
<body>
<?php include "components/header.php"; ?>
    <?php include "components/navbar.php"; ?>
    <section class="home">
        <div class="slides__container">
            <div class="slide active">
                <div class="content">
                    <span>new arrivals</span>
                    <h3>flexible chair</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eveniet officia tempore accusantium perspiciatis magnam, esse, iure quisquam, harum beatae ab. Velit iure ullam quis rem excepturi quasi reiciendis beatae!</p>
                    <a href="#" class="btn">shop now</a>
                </div>
                <div class="image">
                    <img src="images/home-img-1.png" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <span>new arrivals</span>
                    <h3>flexible chair</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eveniet officia tempore accusantium perspiciatis magnam, esse, iure quisquam, harum beatae ab. Velit iure ullam quis rem excepturi quasi reiciendis beatae!</p>
                    <a href="#" class="btn">shop now</a>
                </div>
                <div class="image">
                    <img src="images/home-img-2.png" alt="">
                </div>
            </div>
        </div>
        <div id="slide-next" onclick="next()" class="ri-arrow-right-line"></div>
        <div id="slide-prev" onclick="prev()" class="ri-arrow-left-line"></div>
    </section>
    <section class="banner__container">
        <div class="banner">
            <img src="images/banner-1.jpg" alt="">
            <div class="content">
                <span>limited offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="images/banner-2.jpg" alt="">
            <div class="content">
                <span>limited offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="images/banner-3.jpg" alt="">
            <div class="content">
                <span>limited offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
    </section>
    <?php include "components/footer.php"; ?>
    <?php include "components/js.php"; ?>
</body>
</html>
