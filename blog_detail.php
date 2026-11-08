<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php include "components/css.php"; ?>
</head>

<body>
    <?php include "components/header.php"; ?>
    <?php include "components/navbar.php"; ?>
    <section class="heading">
        <h3>blog detail</h3>
        <p><a href="index.php">home</a> / <a href="blog.php">blog</a> / <span>detail</span></p>
    </section>
    <section class="blog__detail">
        <div class="image">
            <img src="images/blog-1.jpg" alt="blog title goes here ...">
        </div>
        <div class="content">
            <div class="icons">
                <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2023</a>
                <a href="#"> <i class="fas fa-user"></i> by admin</a>
            </div>
            <h3>blog title goes here ...</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus, iusto quasi laboriosam voluptatibus at esse maxime quod quae mollitia molestiae magnam aperiam aspernatur eius obcaecati enim eveniet quis fugit!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit labore facere non autem soluta tempora natus, sequi obcaecati esse officia aspernatur impedit dignissimos ut porro praesentium similique numquam magnam.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam sequi illo cum expedita, eius laboriosam? Blanditiis quisquam, iure nisi, ex amet odit obcaecati eaque voluptatibus porro repudiandae sit libero debitis!</p>
            <a href="blog.php" class="btn">back to blog</a>
        </div>
    </section>
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>