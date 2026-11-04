<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team | FurnishMe</title>
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
                        <h3>team list</h3>
                        <div class="table__actions">
                            <a href="team_create.php" class="admin__btn sm"><i class="ri-add-line"></i> add member</a>
                        </div>
                    </div>
                    <div class="panel__body flush">
                        <table class="admin__table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>profile</th>
                                    <th>name</th>
                                    <th>position</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td><img src="../images/team-1.jpg" alt="john deo" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>john deo</td>
                                    <td>designer</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="team_update.php?id=1"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="team_delete.php?id=1"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2</td>
                                    <td><img src="../images/team-2.jpg" alt="john deo" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>john deo</td>
                                    <td>designer</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="team_update.php?id=2"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="team_delete.php?id=2"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#3</td>
                                    <td><img src="../images/team-3.jpg" alt="john deo" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>john deo</td>
                                    <td>designer</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="team_update.php?id=3"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="team_delete.php?id=3"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#4</td>
                                    <td><img src="../images/team-4.jpg" alt="john deo" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>john deo</td>
                                    <td>designer</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="team_update.php?id=4"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="team_delete.php?id=4"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5</td>
                                    <td><img src="../images/team-5.jpg" alt="john deo" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>john deo</td>
                                    <td>designer</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="team_update.php?id=5"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="team_delete.php?id=5"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#6</td>
                                    <td><img src="../images/team-6.jpg" alt="john deo" style="width:4rem;height:4rem;object-fit:cover;border-radius:.6rem;"></td>
                                    <td>john deo</td>
                                    <td>designer</td>
                                    <td>
                                        <div class="table__actions">
                                            <a class="admin__btn sm ghost" href="team_update.php?id=6"><i class="ri-pencil-line"></i> edit</a>
                                            <a class="admin__btn sm danger" href="team_delete.php?id=6"><i class="ri-delete-bin-line"></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <?php include "components/footer.php"; ?>
        </div>
    </div>
    <?php include "components/js.php"; ?>
</body>

</html>