<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | FurnishMe</title>
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
                        <h3>product list</h3>
                        <div class="table__actions">
                            <a href="product_create.php" class="admin__btn sm"><i class="ri-add-line"></i> add product</a>
                        </div>
                    </div>
                    <div class="panel__body flush">
                        <table class="admin__table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>image</th>
                                    <th>name</th>
                                    <th>price</th>
                                    <th>stock</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td><img src="../images/product-1.png" alt="flexible chair" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>flexible chair</td>
                                    <td>$140.00</td>
                                    <td>25</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="product_update.php?id=1"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="product_delete.php?id=1"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2</td>
                                    <td><img src="../images/product-2.png" alt="modern furniture" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>modern furniture</td>
                                    <td>$140.00</td>
                                    <td>50</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="product_update.php?id=2"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="product_delete.php?id=2"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#3</td>
                                    <td><img src="../images/product-3.png" alt="modern furniture" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>modern furniture</td>
                                    <td>$140.00</td>
                                    <td>50</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="product_update.php?id=3"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="product_delete.php?id=3"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#4</td>
                                    <td><img src="../images/product-4.png" alt="modern furniture" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>modern furniture</td>
                                    <td>$140.00</td>
                                    <td>50</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="product_update.php?id=4"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="product_delete.php?id=4"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5</td>
                                    <td><img src="../images/product-5.png" alt="modern furniture" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>modern furniture</td>
                                    <td>$140.00</td>
                                    <td>50</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="product_update.php?id=5"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="product_delete.php?id=5"><i class="ri-delete-bin-line"></i> delete</a>
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