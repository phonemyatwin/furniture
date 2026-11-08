<?php
// Session start
require_once __DIR__ . '/../components/session_config.php';

// Database connect 
require_once __DIR__ . '/../components/connection.php';

// Admin session check
require_once __DIR__ . '/components/admin_session_check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product | FurnishMe</title>
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
                        <h3>update product</h3>
                        <a href="products.php" class="admin__btn sm ghost">back to list</a>
                    </div>
                    <div class="panel__body">
                        <div class="auth__card form__card">
                            <div class="auth__intro">
                                <span class="auth__icon"><i class="ri-edit-box-line"></i></span>
                                <h3>Update product</h3>
                                <p>Edit product details and save changes</p>
                            </div>
                            <form method="post" enctype="multipart/form-data" class="auth__form">
                                <input type="hidden" name="id" value="1">
                                <div class="auth__field">
                                    <label for="name">Name</label>
                                    <div class="auth__input">
                                        <i class="ri-price-tag-3-line"></i>
                                        <input type="text" id="name" name="name" class="box" placeholder="Enter product name" required value="flexible chair">
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="price">Price</label>
                                    <div class="auth__input">
                                        <i class="ri-money-dollar-circle-line"></i>
                                        <input type="number" step="0.01" id="price" name="price" class="box" placeholder="Enter price" required value="140">
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="stock">Stock</label>
                                    <div class="auth__input">
                                        <i class="ri-stack-line"></i>
                                        <input type="number" id="stock" name="stock" class="box" placeholder="Enter stock quantity" required value="25">
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="image">Image</label>
                                    <div class="auth__input">
                                        <i class="ri-image-line"></i>
                                        <input type="file" id="image" name="image" class="box" accept="image/*">
                                    </div>
                                    <img src="../images/product-1.png" alt="current image" style="width:6rem;height:6rem;object-fit:cover;border-radius:.6rem;margin-top:.8rem;">
                                </div>
                                <div class="auth__field">
                                    <label for="description">Description</label>
                                    <div class="auth__input">
                                        <i class="ri-file-text-line"></i>
                                        <textarea id="description" name="description" class="box" placeholder="Enter product description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eveniet officia tempore accusantium perspiciatis magnam.</textarea>
                                    </div>
                                </div>
                                <button type="submit" name="update" class="admin__btn"><i class="ri-save-line"></i> Update product</button>
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