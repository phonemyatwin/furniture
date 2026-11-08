<?php
require_once __DIR__ . '/components/session_config.php';
// Database connection
require_once __DIR__ . '/components/connection.php';

if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {

    // User-input data
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    // Email and password check
    $stmt = $pdo->prepare('SELECT id, email, password FROM users WHERE email = :email LIMIT 1');
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();

    if (!$user || $password === '' || !password_verify($password, $user['password'])) {
        $errors['login'] = 'The login information you entered is incorrect.';
    } else if (empty($errors)) {
        if ($remember) {
            setcookie('email_cookie', $email, [
                'expires' => time() + (60 * 60 * 24 * 30),
                'path' => '/',
                'httponly' => true,
                'samesite' => 'Lax'
            ]);
        } else {
            setcookie('email_cookie', '', [
                'expires' => time() - 3600,
                'path' => '/',
                'httponly' => true,
                'samesite' => 'Lax'
            ]);
        }
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php');
        exit();
    }
}

?>

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
                            <input type="email" id="email" placeholder="Enter your email" value="<?= htmlspecialchars($_COOKIE['email_cookie'] ?? ''); ?>" name="email" class="box">
                        </div>
                    </div>
                    <div class="auth__field">
                        <label for="password">Password</label>
                        <div class="auth__input">
                            <i class="ri-lock-2-line"></i>
                            <input type="password" id="password" placeholder="Enter your password" name="password" class="box">
                        </div>
                        <?php if (isset($errors['login'])): ?>
                            <p class="text-lg text-red-600 flex items-center gap-1">
                                <span><i class="ri-information-line"></i></span>
                                <span><?= htmlspecialchars($errors['login'] ?? ''); ?></span>
                            </p>
                        <?php endif; ?>
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
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>