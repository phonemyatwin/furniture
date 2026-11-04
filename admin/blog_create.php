<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post | FurnishMe</title>
    <link rel="icon" href="../images/favicon.ico">
    <?php include "components/css.php"; ?>
</head>

<body class="admin__body">
    <div class="admin__shell">
        <?php include "components/sidebar.php"; ?>
        <div class="admin__main">
            <?php include "components/topbar.php"; ?>
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
                                        <input type="text" id="title" name="title" class="box" placeholder="Enter post title" required>
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="author">Author</label>
                                    <div class="auth__input">
                                        <i class="ri-user-line"></i>
                                        <input type="text" id="author" name="author" class="box" placeholder="Enter author name" required value="admin">
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
                                        <textarea id="description" name="description" class="box" placeholder="Enter post description"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="create" class="admin__btn"><i class="ri-add-line"></i> Create post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include "components/footer.php"; ?>
        </div>
    </div>
    <?php include "components/js.php"; ?>
</body>

</html>