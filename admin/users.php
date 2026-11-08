<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users | FurnishMe</title>
    <link rel="icon" href="../images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body class="admin__body">
    <div class="admin__shell">
        <?php include "components/sidebar.php"; ?>
        <div class="admin__main">
            <?php include "components/topbar.php"; ?>
            <main class="admin__content">
                <div class="panel">
                    <div class="panel__head">
                        <h3>user list</h3>
                        <div class="table__actions">
                            <a href="user_create.php" class="admin__btn sm"><i class="ri-add-line"></i> add user</a>
                        </div>
                    </div>
                    <div class="panel__body flush">
                        <table class="admin__table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td>admin</td>
                                    <td style="text-transform:none;">admin@gmail.com</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="user_update.php?id=1"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="user_delete.php?id=1"><i class="ri-delete-bin-line"></i> delete</a>
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