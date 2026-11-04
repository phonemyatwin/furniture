<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Team Member | FurnishMe</title>
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
                        <h3>delete member</h3>
                        <a href="team.php" class="admin__btn sm ghost">cancel</a>
                    </div>
                    <div class="panel__body">
                        <p style="font-size:1.5rem;color:var(--text-muted);margin-bottom:1.6rem;">Are you sure you want to delete this member?</p>
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
                                    <td style="text-transform:none;">john deo</td>
                                </tr>
                                <tr>
                                    <td>Profile</td>
                                    <td><img src="../images/team-1.jpg" alt="john deo" style="width:6rem;height:6rem;object-fit:cover;border-radius:.6rem;"></td>
                                </tr>
                                <tr>
                                    <td>Position</td>
                                    <td style="text-transform:none;">designer</td>
                                </tr>
                            </tbody>
                        </table>
                        <form method="post" class="table__actions">
                            <button type="submit" name="delete" class="admin__btn danger"><i class="ri-delete-bin-line"></i> confirm delete</button>
                            <a href="team.php" class="admin__btn ghost">cancel</a>
                        </form>
                    </div>
                </div>
            </main>
            <?php include "components/footer.php"; ?>
        </div>
    </div>
    <?php include "components/js.php"; ?>
</body>

</html>