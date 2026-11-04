<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User | FurnishMe</title>
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
                        <h3>update user</h3>
                        <a href="users.php" class="admin__btn sm ghost">back to list</a>
                    </div>
                    <div class="panel__body">
                        <div class="auth__card form__card">
                            <div class="auth__intro">
                                <span class="auth__icon"><i class="ri-user-settings-line"></i></span>
                                <h3>Update user</h3>
                                <p>Edit account details and save changes</p>
                            </div>
                            <form method="post" class="auth__form">
                                <input type="hidden" name="id" value="1">
                                <div class="auth__field">
                                    <label for="username">Username</label>
                                    <div class="auth__input">
                                        <i class="ri-user-line"></i>
                                        <input type="text" id="username" name="username" class="box" placeholder="Enter username" required value="admin">
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="email">Email</label>
                                    <div class="auth__input">
                                        <i class="ri-mail-line"></i>
                                        <input type="email" id="email" name="email" class="box" placeholder="Enter email" required value="admin@gmail.com">
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="password">Password</label>
                                    <div class="auth__input">
                                        <i class="ri-lock-2-line"></i>
                                        <input type="password" id="password" name="password" class="box" placeholder="Enter new password">
                                    </div>
                                </div>
                                <div class="auth__field">
                                    <label for="confirm_password">Confirm password</label>
                                    <div class="auth__input">
                                        <i class="ri-lock-password-line"></i>
                                        <input type="password" id="confirm_password" name="confirm_password" class="box" placeholder="Confirm new password">
                                    </div>
                                </div>
                                <button type="submit" name="update" class="admin__btn"><i class="ri-save-line"></i> Update user</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include "components/footer.php"; ?>
        </div>
    </div>
    <?php include "components/js.php"; ?>
</body>

</html>