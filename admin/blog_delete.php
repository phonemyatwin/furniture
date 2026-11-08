<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Blog Post | FurnishMe</title>
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
                        <h3>delete post</h3>
                        <a href="blog.php" class="admin__btn sm ghost">cancel</a>
                    </div>
                    <div class="panel__body">
                        <p style="font-size:1.5rem;color:var(--text-muted);margin-bottom:1.6rem;">Are you sure you want to delete this post?</p>
                        <table class="admin__table" style="margin-bottom:2rem;">
                            <thead>
                                <tr>
                                    <th>field</th>
                                    <th>value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td style="text-transform:none;">#1</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td style="text-transform:none;">blog title goes here ...</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td><img src="../images/blog-1.jpg" alt="blog title" style="width:6rem;height:6rem;object-fit:cover;border-radius:.6rem;"></td>
                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td style="text-transform:none;">admin</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td style="text-transform:none;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                </tr>
                            </tbody>
                        </table>
                        <form method="post" class="table__actions">
                            <button type="submit" name="delete" class="admin__btn danger"><i class="ri-delete-bin-line"></i> confirm delete</button>
                            <a href="blog.php" class="admin__btn ghost">cancel</a>
                        </form>
                    </div>
                </div>
            </main>
            <?php require_once __DIR__ . '/components/footer.php'; ?>
        </div>
    </div>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>