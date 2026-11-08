<?php
// Session start
require_once __DIR__ . '/../components/session_config.php';

// Database connect
require_once __DIR__ . '/../components/connection.php';

// Admin id check
if (isset($_SESSION['admin_id'])) {
    header('Location: dashboard.php');
    exit();
}

// Array variable to collect errors.
$errors = [];

// Check if the request method is post and if there is a key named 'admin_login'.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {

    // User input data
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    // Email and password check
    $stmt = $pdo->prepare('SELECT id, email, password FROM admins WHERE email = :email LIMIT 1');
    $stmt->execute([':email' => $email]);
    $admin = $stmt->fetch();
    if ($admin && $password !== '' && password_verify($password, $admin['password'])) {
        if ($remember) {
            setcookie('admin_email_cookie', $email, [
                'expires' => time() + 60 * 60 * 24 * 30,
                'path' => '/',
                'httponly' => true,
                'samesite' => 'Lax'
            ]);
        } else {
            setcookie('admin_email_cookie', '', [
                'expires' => time() - 3600,
                'path' => '/',
                'httponly' => true,
                'samesite' => 'Lax'
            ]);
        }
        $_SESSION['admin_id'] = $admin['id'];
        header('Location: dashboard.php');
        exit();
    } else {
        $errors['login'] = "The login information you entered is incorrect.";
    }
}

?>

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
            <form action="" method="post" class="auth__form">
                <div class="auth__field">
                    <label for="email">Email</label>
                    <div class="auth__input">
                        <i class="ri-mail-line"></i>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($_COOKIE['admin_email_cookie'] ?? ''); ?>" class="box" placeholder="Enter your email">
                    </div>
                </div>
                <div class="auth__field">
                    <label for="password">Password</label>
                    <div class="auth__input">
                        <i class="ri-lock-2-line"></i>
                        <input type="password" id="password" name="password" class="box" placeholder="Enter password">
                    </div>
                    <?php if (isset($errors['login'])): ?>
                        <p class="text-lg text-red-600 flex items-center gap-1">
                            <span><i class="ri-information-line"></i></span>
                            <span><?= htmlspecialchars($errors['login']); ?></span>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="auth__row">
                    <label class="remember" for="remember-me">
                        <input type="checkbox" name="remember" id="remember-me">
                        <span>Remember me</span>
                    </label>
                </div>
                <button type="submit" name="login" class="admin__btn login__submit">
                    <i class="ri-login-box-line"></i> Login Now
                </button>
            </form>
        </div>
    </div>
</body>

</html>