<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts | FurnishMe</title>
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
                        <h3>contact messages</h3>
                    </div>
                    <div class="panel__body flush">
                        <table class="admin__table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>number</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td>Aung Min</td>
                                    <td style="text-transform:none;">aungmin@gmail.com</td>
                                    <td style="text-transform:none;">09123456789</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="contact_view.php?id=1"><i class="ri-eye-line"></i> view</a>
                                            <a class="admin__btn sm danger" href="contact_delete.php?id=1"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2</td>
                                    <td>Su Su</td>
                                    <td style="text-transform:none;">susu@gmail.com</td>
                                    <td style="text-transform:none;">09987654321</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="contact_view.php?id=2"><i class="ri-eye-line"></i> view</a>
                                            <a class="admin__btn sm danger" href="contact_delete.php?id=2"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#3</td>
                                    <td>Ko Ko</td>
                                    <td style="text-transform:none;">koko@gmail.com</td>
                                    <td style="text-transform:none;">09771234567</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="contact_view.php?id=3"><i class="ri-eye-line"></i> view</a>
                                            <a class="admin__btn sm danger" href="contact_delete.php?id=3"><i class="ri-delete-bin-line"></i> delete</a>
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