<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php include "components/css.php"; ?>
</head>

<body>
    <?php include "components/header.php"; ?>
    <?php include "components/navbar.php"; ?>
    <section class="heading">
        <h3>login</h3>
        <p><a href="index.php">home</a> / <span>login</span></p>
    </section>
    <section class="auth">
        <div class="auth__card auth__card--split">
            <div class="auth__visual">
                <img src="images/auth-login.svg" alt="Login illustration" width="420" height="420" loading="lazy">
            </div>
            <div class="auth__content">
                <div class="auth__intro">
                    <span class="auth__icon"><i class="ri-user-smile-line"></i></span>
                    <h3>Welcome back</h3>
                    <p>Sign in to continue shopping with us</p>
                </div>
                <form action="#" method="post" class="auth__form">
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
                    <div class="auth__row">
                        <label class="remember" for="remember-me">
                            <input type="checkbox" name="remember" id="remember-me">
                            <span>Remember me</span>
                        </label>
                    </div>
                    <input type="submit" value="Login Now" name="login" class="btn">
                    <p class="auth__switch">Don't have an account? <a href="register.php">Create now</a></p>
                </form>
            </div>
        </div>
    </section>
    <?php include "components/footer.php"; ?>
    <?php include "components/js.php"; ?>
</body>

</html>