<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | FurnishMe</title>
    <link rel="icon" href="../images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body class="admin__body admin__login">
    <div class="login__wrap">
        <div class="auth__card">
            <div class="auth__intro">
                <span class="auth__icon"><i class="ri-home-smile-line"></i></span>
                <h3>Admin login</h3>
                <p>Sign in to manage the store</p>
            </div>
            <form action="dashboard.php" method="post" class="auth__form">
                <div class="auth__field">
                    <label for="email">Email</label>
                    <div class="auth__input">
                        <i class="ri-mail-line"></i>
                        <input type="email" id="email" name="email" class="box" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="auth__field">
                    <label for="password">Password</label>
                    <div class="auth__input">
                        <i class="ri-lock-2-line"></i>
                        <input type="password" id="password" name="password" class="box" placeholder="Enter password" required>
                    </div>
                </div>
                <button type="submit" name="admin_login" class="admin__btn login__submit">
                    <i class="ri-login-box-line"></i> Login Now
                </button>
            </form>
        </div>
    </div>
</body>

</html>