<?php
require_once __DIR__ . '/components/session_config.php';
require_once __DIR__ . '/components/connection.php';
require_once __DIR__ . '/components/user_session_check.php';

$stmt = $pdo->query('SELECT * FROM blogs ORDER BY id DESC');
$blogs = $stmt->fetchAll();
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
            <?php if (!empty($blogs)): ?>
                <?php foreach ($blogs as $blog): ?>
                    <div class="box">
                        <div class="image">
                            <img src="<?= htmlspecialchars(!empty($blog['image']) ? './media/' . $blog['image'] : './images/placeholder.svg'); ?>" alt="<?= htmlspecialchars($blog['title']) ?? 'Placeholder'; ?>">
                        </div>
                        <div class="content">
                            <h3><?= htmlspecialchars($blog['title'] ?? 'Add title'); ?></h3>
                            <p class='line-clamp-3'><?= htmlspecialchars($blog['description'] ?? 'Add description...'); ?></p>
                            <a href="blog_detail.php?id=<?= htmlspecialchars($blog['id']); ?>" class="btn">read more</a>
                            <div class="icons">
                                <p> <i class="fas fa-calendar"></i><?= htmlspecialchars($blog['created_at']); ?></p>
                                <p> <i class="fas fa-user"></i><?= htmlspecialchars($blog['author'] ?? 'Add author'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="box">
                    <div class="image">
                        <img src="./images/placeholder.svg" alt="Placeholder">
                    </div>
                    <div class="content">
                        <h3>Add title</h3>
                        <p class='line-clamp-3'>Add description...</p>
                        <a href="#" class="btn">read more</a>
                        <div class="icons">
                            <p> <i class="fas fa-calendar"></i>Date</p>
                            <p> <i class="fas fa-user"></i>Add author</p>
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