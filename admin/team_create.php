<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Team Member | FurnishMe</title>
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
                        <h3>create member</h3>
                        <a href="team.php" class="admin__btn sm ghost">back to list</a>
                    </div>
                    <div class="panel__body">
                        <div class="auth__card form__card">
                            <div class="auth__intro">
                                <span class="auth__icon"><i class="ri-team-line"></i></span>
                                <h3>Create member</h3>
                                <p>Add a new team member</p>
                            </div>
                            <form method="post" enctype="multipart/form-data" class="auth__form">
                                <div class="auth__field">
                                    <label for="name">Name</label>
                                    <div class="auth__input">
                                        <i class="ri-user-line"></i>
                                        <input type="text" id="name" name="name" class="box" placeholder="Enter member name" required>
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="profile">Profile</label>
                                    <div class="auth__input">
                                        <i class="ri-image-line"></i>
                                        <input type="file" id="profile" name="profile" class="box" accept="image/*" required>
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="position">Position</label>
                                    <div class="auth__input">
                                        <i class="ri-briefcase-line"></i>
                                        <input type="text" id="position" name="position" class="box" placeholder="Enter position" required>
                                    </div>
                                </div>
                                <button type="submit" name="create" class="admin__btn"><i class="ri-add-line"></i> Create member</button>
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