<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contact | FurnishMe</title>
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
                        <h3>contact message</h3>
                        <div class="table__actions">
                            <a href="contacts.php" class="admin__btn sm ghost">back</a>
                            <a href="contact_delete.php?id=1" class="admin__btn sm danger"><i class="ri-delete-bin-line"></i> delete</a>
                        </div>
                    </div>
                    <div class="panel__body">
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
                                    <td>Name</td>
                                    <td style="text-transform:none;">Aung Min</td>
                                </tr>
                                <tr>
                                    <td>Number</td>
                                    <td style="text-transform:none;">09123456789</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td style="text-transform:none;">aungmin@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td style="text-transform:none;">2026-11-04 14:30</td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="font-size:1.5rem;color:var(--text-muted);line-height:1.7;">
                            Hello, I would like to know more about your modern sofa collection and delivery options in Yangon. Please contact me. Thank you.
                        </p>
                    </div>
                </div>
            </main>
            <?php require_once __DIR__ . '/components/footer.php'; ?>
        </div>
    </div>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>