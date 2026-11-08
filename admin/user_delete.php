<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User | FurnishMe</title>
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
                        <h3>delete user</h3>
                        <a href="users.php" class="admin__btn sm ghost">cancel</a>
                    </div>
                    <div class="panel__body">
                        <p style="font-size:1.5rem;color:var(--text-muted);margin-bottom:1.6rem;">Are you sure you want to delete this user?</p>
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
                                    <td>Username</td>
                                    <td style="text-transform:none;">admin</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td style="text-transform:none;">admin@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                        <form method="post" class="table__actions">
                            <button type="submit" name="delete" class="admin__btn danger"><i class="ri-delete-bin-line"></i> confirm delete</button>
                            <a href="users.php" class="admin__btn ghost">cancel</a>
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