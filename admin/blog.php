<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | FurnishMe</title>
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
                        <h3>blog list</h3>
                        <div class="table__actions">
                            <a href="blog_create.php" class="admin__btn sm"><i class="ri-add-line"></i> add post</a>
                        </div>
                    </div>
                    <div class="panel__body flush">
                        <table class="admin__table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>image</th>
                                    <th>title</th>
                                    <th>author</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td><img src="../images/blog-1.jpg" alt="blog title" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>blog title goes here ...</td>
                                    <td>admin</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="blog_update.php?id=1"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="blog_delete.php?id=1"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2</td>
                                    <td><img src="../images/blog-2.jpg" alt="blog title" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>blog title goes here ...</td>
                                    <td>admin</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="blog_update.php?id=2"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="blog_delete.php?id=2"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#3</td>
                                    <td><img src="../images/blog-3.jpg" alt="blog title" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>blog title goes here ...</td>
                                    <td>admin</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="blog_update.php?id=3"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="blog_delete.php?id=3"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#4</td>
                                    <td><img src="../images/blog-4.jpg" alt="blog title" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>blog title goes here ...</td>
                                    <td>admin</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="blog_update.php?id=4"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="blog_delete.php?id=4"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5</td>
                                    <td><img src="../images/blog-5.jpg" alt="blog title" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>blog title goes here ...</td>
                                    <td>admin</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="blog_update.php?id=5"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="blog_delete.php?id=5"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#6</td>
                                    <td><img src="../images/blog-6.jpg" alt="blog title" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>blog title goes here ...</td>
                                    <td>admin</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="blog_update.php?id=6"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="blog_delete.php?id=6"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <?php require_once __DIR__ . '/components/footer.php'; ?>
        </div>
    </div>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>