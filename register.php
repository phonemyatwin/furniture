<?php
// Session start
require_once __DIR__ . '/components/session_config.php';

// Database Connect
require_once __DIR__ . "/components/connection.php";

$errors = [];
// Check if the request method is 'POST' and if there is a key named 'register'.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {

    // User-input data
    // I used trim function to cut the white spaces and null coalescing operator to catch if null exists.
    $username = trim($_POST['username'] ?? '');
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Username check
    // The only reason I used single if statement to check each condition is to make the code look clean because for me, personally, the nested loop is quite a mess.
    if ($username === '') {
        $errors['username'] = 'Username is required.';
    } else if (strlen($username) < 3 || strlen($username) > 30) {
        $errors['username'] = 'Username must be 3 to 30 characters.';
    }
    if (!isset($errors['username'])) {
        $stmt = $pdo->prepare("SELECT 1 FROM users WHERE username = :username LIMIT 1");
        $stmt->execute([
            ':username' => $username
        ]);
        if ($stmt->fetch()) {
            $errors['username'] = 'This username is already taken.';
        }
    }

    // Email check
    if ($email === '') {
        $errors['email'] = 'Email is required.';
        // filter_var() checks $email with the standard FILTER_VALIDATE_EMAIL. It returns $email if it matches, or false if it doesn't. !false === true
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email.';
    }
    if (!isset($errors['email'])) {
        $stmt = $pdo->prepare("SELECT 1 FROM users WHERE email = :email LIMIT 1");
        $stmt->execute([
            ':email' => $email
        ]);
        if ($stmt->fetch()) {
            $errors['email'] = 'This email is already registered.';
        }
    }

    // Password check
    if ($password === '') {
        $errors['password'] = 'Password is required.';
    } else if (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters.';
    }

    // Confirm password check
    if ($confirm_password === '') {
        $errors['confirm_password'] = 'Please confirm your password';
    } else if ($password !== $confirm_password) {
        $errors['confirm_password'] = 'Passwords do not match. Please try again.';
    }

    // If there aren't errors, then register.
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO users(username, email, password) VALUES(:username, :email, :hashed_password)');
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':hashed_password' => $hashed_password
        ]);
        header('Location: login.php');
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
    <title>Register | FurnishMe</title>
    <link rel="icon" href="images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body>
    <?php require_once __DIR__ . '/components/header.php.php'; ?>
    <?php require_once __DIR__ . '/components/navbar.php.php'; ?>
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
                            <input type="text" id="username" placeholder="Enter your username" value="<?= htmlspecialchars($username ?? ''); ?>" name="username" class="box" required>
                        </div>
                        <?php if (isset($errors['username'])): ?>
                            <p class="text-lg text-red-600 flex items-center gap-1">
                                <span class="ri-information-line"></span>
                                <span><?= htmlspecialchars($errors['username']); ?></span>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="auth__field">
                        <label for="email">Email</label>
                        <div class="auth__input">
                            <i class="ri-mail-line"></i>
                            <input type="email" id="email" placeholder="Enter your email" value="<?= htmlspecialchars($email ?? ''); ?>" name="email" class="box" required>
                        </div>
                        <?php if (isset($errors['email'])): ?>
                            <p class="text-lg text-red-600 flex items-center gap-1">
                                <span class="ri-information-line"></span>
                                <span><?= htmlspecialchars($errors['email']); ?></span>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="auth__field">
                        <label for="password">Password</label>
                        <div class="auth__input">
                            <i class="ri-lock-2-line"></i>
                            <input type="password" id="password" placeholder="Enter your password" name="password" class="box" required>
                        </div>
                        <?php if (isset($errors['password'])): ?>
                            <p class="text-lg text-red-600 flex items-center gap-1">
                                <span class="ri-information-line"></span>
                                <span><?= htmlspecialchars($errors['password']); ?></span>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="auth__field">
                        <label for="confirm_password">Confirm password</label>
                        <div class="auth__input">
                            <i class="ri-lock-password-line"></i>
                            <input type="password" id="confirm_password" placeholder="Confirm your password" name="confirm_password" class="box" required>
                        </div>
                        <?php if (isset($errors['confirm_password'])): ?>
                            <p class="text-lg text-red-600 flex items-center gap-1">
                                <span class="ri-information-line"></span>
                                <span><?= htmlspecialchars($errors['confirm_password']); ?></span>
                            </p>
                        <?php endif; ?>
                    </div>
                    <input type="submit" value="Register Now" name="register" class="btn">
                    <p class="auth__switch">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </section>
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <?php require_once __DIR__ . '/components/js.php'; ?>
</body>

</html>