<?php
require_once __DIR__ . '/components/session_config.php';
require_once __DIR__ . '/components/connection.php';
require_once __DIR__ . '/components/session_check.php';

$stmt = $pdo->query('SELECT * FROM blogs ORDER BY id DESC');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body>
    <?php require_once __DIR__ . '/components/header.php'; ?>
    <?php require_once __DIR__ . '/components/navbar.php'; ?>
    <section class="heading">
        <h3>our blogs</h3>
        <p><a href="index.php">home</a> / <span>blog</span></p>
    </section>
    <section class="blog">
        <div class="box__container">
            <?php if ($blog = $stmt->fetch()): ?>
                <?php while ($blog): ?>
                    <div class="box">
                        <div class="image">
                            <img src="./media/<?= htmlspecialchars($blog['image']); ?>" alt="<?= htmlspecialchars($blog['title']); ?>">
                        </div>
                        <div class="content">
                            <h3><?= htmlspecialchars($blog['title']); ?></h3>
                            <p class='line-clamp-3'><?= htmlspecialchars($blog['description']); ?></p>
                            <a href="blog_detail.php?id=<?= htmlspecialchars($blog['id']); ?>" class="btn">read more</a>
                            <div class="icons">
                                <a href="#"> <i class="fas fa-calendar"></i><?= htmlspecialchars($blog['created_at']); ?></a>
                                <a href="#"> <i class="fas fa-user"></i><?= htmlspecialchars($blog['author']); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="box">
                    <div class="image">
                        <img src="./images/placeholder.svg" alt="Placeholder">
                    </div>
                    <div class="content">
                        <h3>Title</h3>
                        <p class='line-clamp-3'>Description...</p>
                        <a href="#" class="btn">read more</a>
                        <div class="icons">
                            <p href="#"> <i class="fas fa-calendar"></i>Date</p>
                            <p href="#"> <i class="fas fa-user"></i>Author</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>