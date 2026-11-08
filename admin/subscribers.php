<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribers | FurnishMe</title>
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
                        <h3>newsletter subscribers</h3>
                    </div>
                    <div class="panel__body flush">
                        <table class="admin__table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>email</th>
                                    <th>subscribed at</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td style="text-transform:none;">aungmin@gmail.com</td>
                                    <td style="text-transform:none;">2026-11-01</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm danger" href="subscriber_delete.php?id=1"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2</td>
                                    <td style="text-transform:none;">susu@gmail.com</td>
                                    <td style="text-transform:none;">2026-11-02</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm danger" href="subscriber_delete.php?id=2"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#3</td>
                                    <td style="text-transform:none;">koko@gmail.com</td>
                                    <td style="text-transform:none;">2026-11-03</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm danger" href="subscriber_delete.php?id=3"><i class="ri-delete-bin-line"></i> delete</a>
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