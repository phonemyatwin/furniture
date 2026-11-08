<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product | FurnishMe</title>
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
                        <h3>create product</h3>
                        <a href="products.php" class="admin__btn sm ghost">back to list</a>
                    </div>
                    <div class="panel__body">
                        <div class="auth__card form__card">
                            <div class="auth__intro">
                                <span class="auth__icon"><i class="ri-shopping-bag-3-line"></i></span>
                                <h3>Create product</h3>
                                <p>Add a new item to your store</p>
                            </div>
                            <form method="post" enctype="multipart/form-data" class="auth__form">
                                <div class="auth__field">
                                    <label for="name">Name</label>
                                    <div class="auth__input">
                                        <i class="ri-price-tag-3-line"></i>
                                        <input type="text" id="name" name="name" class="box" placeholder="Enter product name" required>
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="price">Price</label>
                                    <div class="auth__input">
                                        <i class="ri-money-dollar-circle-line"></i>
                                        <input type="number" step="0.01" id="price" name="price" class="box" placeholder="Enter price" required>
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="stock">Stock</label>
                                    <div class="auth__input">
                                        <i class="ri-stack-line"></i>
                                        <input type="number" id="stock" name="stock" class="box" placeholder="Enter stock quantity" required>
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
                                        <textarea id="description" name="description" class="box" placeholder="Enter product description"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="create" class="admin__btn"><i class="ri-add-line"></i> Create product</button>
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