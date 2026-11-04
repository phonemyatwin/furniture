<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php include "components/css.php"; ?>
</head>

<body>
    <?php include "components/header.php"; ?>
    <?php include "components/navbar.php"; ?>
    <section class="heading">
        <h3>register</h3>
        <p><a href="index.php">home</a> / <span>register</span></p>
    </section>
    <section class="auth">
        <div class="auth__card auth__card--split">
            <div class="auth__visual">
                <img src="images/auth-register.svg" alt="Register illustration" width="420" height="420" loading="lazy">
            </div>
            <div class="auth__content">
                <div class="auth__intro">
                    <span class="auth__icon"><i class="ri-user-add-line"></i></span>
                    <h3>Create account</h3>
                    <p>Join us and discover furniture you'll love</p>
                </div>
                <form action="#" method="post" class="auth__form">
                    <div class="auth__field">
                        <label for="username">Username</label>
                        <div class="auth__input">
                            <i class="ri-user-line"></i>
                            <input type="text" id="username" placeholder="Enter your username" name="username" class="box" required>
                        </div>
                    </div>
                    <div class="auth__field">
                        <label for="email">Email</label>
                        <div class="auth__input">
                            <i class="ri-mail-line"></i>
                            <input type="email" id="email" placeholder="Enter your email" name="email" class="box" required>
                        </div>
                    </div>
                    <div class="auth__field">
                        <label for="password">Password</label>
                        <div class="auth__input">
                            <i class="ri-lock-2-line"></i>
                            <input type="password" id="password" placeholder="Enter your password" name="password" class="box" required>
                        </div>
                    </div>
                    <div class="auth__field">
                        <label for="confirm_password">Confirm password</label>
                        <div class="auth__input">
                            <i class="ri-lock-password-line"></i>
                            <input type="password" id="confirm_password" placeholder="Confirm your password" name="confirm_password" class="box" required>
                        </div>
                    </div>
                    <input type="submit" value="Register Now" name="click" class="btn">
                    <p class="auth__switch">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </section>
    <?php include "components/footer.php"; ?>
    <?php include "components/js.php"; ?>
</body>

</html>