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
    <title>Update Team Member | FurnishMe</title>
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
                        <h3>update member</h3>
                        <a href="team.php" class="admin__btn sm ghost">back to list</a>
                    </div>
                    <div class="panel__body">
                        <div class="auth__card form__card">
                            <div class="auth__intro">
                                <span class="auth__icon"><i class="ri-user-settings-line"></i></span>
                                <h3>Update member</h3>
                                <p>Edit team member details</p>
                            </div>
                            <form method="post" enctype="multipart/form-data" class="auth__form">
                                <input type="hidden" name="id" value="1">
                                <div class="auth__field">
                                    <label for="name">Name</label>
                                    <div class="auth__input">
                                        <i class="ri-user-line"></i>
                                        <input type="text" id="name" name="name" class="box" placeholder="Enter member name" required value="john deo">
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="profile">Profile</label>
                                    <div class="auth__input">
                                        <i class="ri-image-line"></i>
                                        <input type="file" id="profile" name="profile" class="box" accept="image/*">
                                    </div>
                                    <img src="../images/team-1.jpg" alt="current profile" style="width:6rem;height:6rem;object-fit:cover;border-radius:.6rem;margin-top:.8rem;">
                                </div>
                                <div class="auth__field">
                                    <label for="position">Position</label>
                                    <div class="auth__input">
                                        <i class="ri-briefcase-line"></i>
                                        <input type="text" id="position" name="position" class="box" placeholder="Enter position" required value="designer">
                                    </div>
                                </div>
                                <button type="submit" name="update" class="admin__btn"><i class="ri-save-line"></i> Update member</button>
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