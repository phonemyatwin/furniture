<?php
require_once __DIR__ . '/components/session_config.php';
require_once __DIR__ . '/components/connection.php';
require_once __DIR__ . '/components/session_check.php';

$id = $_GET['id'] ?? '';
$stmt = $pdo->prepare('SELECT * FROM blogs WHERE id = :id');
$stmt->execute([':id' => $id]);
$blog = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body>
    <?php require_once __DIR__ . '/components/header.php'; ?>
    <?php require_once __DIR__ . '/components/navbar.php'; ?>
    <section class="heading">
        <h3>blog detail</h3>
        <p><a href="index.php">home</a> / <a href="blog.php">blog</a> / <span>detail</span></p>
    </section>
    <section class="blog__detail">
        <div class="image">
            <img src="<?= htmlspecialchars(!empty($blog['image']) ? './media/' . $blog['image'] : './images/placeholder.svg'); ?>" alt="<?= htmlspecialchars($blog['title']) ?? 'placeholder'; ?>">
        </div>
        <div class="content">
            <div class="icons">
                <p> <i class="fas fa-calendar"></i><?= htmlspecialchars($blog['created_at'] ?? 'Date'); ?></p>
                <p> <i class="fas fa-user"></i><?= htmlspecialchars($blog['author'] ?? 'Author'); ?></p>
            </div>
            <h3><?= htmlspecialchars($blog['title'] ?? 'Title'); ?></h3>
            <p><?= htmlspecialchars($blog['description'] ?? 'Description...'); ?></p>
            <a href="blog.php" class="btn">back to blog</a>
        </div>
    </section>
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>