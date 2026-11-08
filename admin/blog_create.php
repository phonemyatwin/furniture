<?php
// Session start
require_once __DIR__ . '/../components/session_config.php';

// Database connect 
require_once __DIR__ . '/../components/connection.php';

// Admin session check
require_once __DIR__ . '/components/admin_session_check.php';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $title = trim($_POST['title'] ?? '');
    $author = trim($_POST['author'] ?? 'Anonymous');
    $image = time() . '_' . $_FILES['image']['name'];
    $description = $_POST['description'] ?? '';

    // Title check
    if ($title === '') {
        $errors['title'] = 'Title is required.';
    }

    // Description check
    if ($description === '') {
        $errors['description'] = 'Description is required.';
    }

    if (empty($errors)) {
        move_uploaded_file($_FILES['image']['tmp_name'], '../media/' . $image);
        $stmt = $pdo->prepare('INSERT INTO blogs(title, author, image, description) VALUES(:title, :author, :image, :description)');
        $stmt->execute([
            ':title' => $title,
            ':author' => $author,
            ':image' => $image,
            ':description' => $description
        ]);
        header('Location: blog.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post | FurnishMe</title>
    <link rel="icon" href="../images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body class="admin__body">
    <div class="admin__shell">
        <?php require_once __DIR__ . '/components/sidebar.php'; ?>
        <div class="admin__main">
            <?php require_once __DIR__ . '/components/topbar.php'; ?>
            <main class="admin__content">
                <div class="panel">
                    <div class="panel__head">
                        <h3>create post</h3>
                        <a href="blog.php" class="admin__btn sm ghost">back to list</a>
                    </div>
                    <div class="panel__body">
                        <div class="auth__card form__card">
                            <div class="auth__intro">
                                <span class="auth__icon"><i class="ri-article-line"></i></span>
                                <h3>Create post</h3>
                                <p>Write a new blog article</p>
                            </div>
                            <form method="post" enctype="multipart/form-data" class="auth__form">
                                <div class="auth__field">
                                    <label for="title">Title</label>
                                    <div class="auth__input">
                                        <i class="ri-heading"></i>
                                        <input type="text" id="title" name="title" class="box" placeholder="Enter post title" required value="<?= htmlspecialchars($title ?? ''); ?>">
                                    </div>
                                    <?php if (isset($errors['title'])): ?>
                                        <p class="text-lg text-red-600 flex items-center gap-1">
                                            <span><i class="ri-information-line"></i></span>
                                            <span><?= htmlspecialchars($errors['title']); ?></span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="auth__field">
                                    <label for="author">Author</label>
                                    <div class="auth__input">
                                        <i class="ri-user-line"></i>
                                        <input type="text" id="author" name="author" class="box" placeholder="Enter author name" required value="<?= htmlspecialchars($author ?? ''); ?>">
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="image">Image</label>
                                    <div class="auth__input">
                                        <i class="ri-image-line"></i>
                                        <input type="file" id="image" name="image" class="box" accept="image/*" required>
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="description">Description</label>
                                    <div class="auth__input">
                                        <i class="ri-file-text-line"></i>
                                        <textarea id="description" name="description" class="box" placeholder="Enter post description"><?= htmlspecialchars($description ?? ''); ?></textarea>
                                    </div>
                                    <?php if (isset($errors['description'])): ?>
                                        <p class="text-lg text-red-600 flex items-center gap-1">
                                            <span><i class="ri-information-line"></i></span>
                                            <span><?= htmlspecialchars($errors['description']); ?></span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" name="create" class="admin__btn"><i class="ri-add-line"></i> Create post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php require_once __DIR__ . '/components/footer.php'; ?>
        </div>
    </div>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>