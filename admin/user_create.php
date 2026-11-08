<?php
// Session start
require_once __DIR__ . '/../components/session_config.php';

// Database connect 
require_once __DIR__ . '/../components/connection.php';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $username = trim($_POST['username'] ?? '');
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Check username
    if ($username === '') {
        $errors['username'] = 'Username is required.';
    } else if (strlen($username) < 3 || strlen($username) > 30) {
        $errors['username'] = 'Username must be 3 to 30 characters.';
    }
    if (!isset($errors['username'])) {
        $stmt = $pdo->prepare('SELECT 1 FROM admins WHERE username = :username LIMIT 1');
        $stmt->execute([':username' => $username]);
        if ($stmt->fetch()) {
            $errors['username'] = 'This username is already taken.';
        }
    }

    // Check email
    if ($email === '') {
        $errors['email'] = 'Email is required.';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email.';
    }
    if (!isset($errors['email'])) {
        $stmt = $pdo->prepare('SELECT 1 FROM admins WHERE email = :email LIMIT 1');
        $stmt->execute([':email' => $email]);
        if ($stmt->fetch()) {
            $errors['email'] = 'This email is already registered.';
        }
    }

    // Check password
    if ($password === '') {
        $errors['password'] = 'Password is required.';
    } else if (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters.';
    }

    // Check confirm password
    if ($confirm_password === '') {
        $errors['confirm_password'] = 'Please confirm your password.';
    } else if ($password !== $confirm_password) {
        $errors['confirm_password'] = 'Passwords do not match. Please try again.';
    }

    // Approve register
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO admins(username, email, password) VALUES(:username, :email, :hashed_password)');
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':hashed_password' => $hashed_password
        ]);
        header('Location: users.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User | FurnishMe</title>
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
                        <h3>create user</h3>
                        <a href="users.php" class="admin__btn sm ghost">back to list</a>
                    </div>
                    <div class="panel__body">
                        <div class="auth__card form__card">
                            <div class="auth__intro">
                                <span class="auth__icon"><i class="ri-user-add-line"></i></span>
                                <h3>Create user</h3>
                                <p>Add a new account to the system</p>
                            </div>
                            <form method="post" class="auth__form">
                                <div class="auth__field">
                                    <label for="username">Username</label>
                                    <div class="auth__input">
                                        <i class="ri-user-line"></i>
                                        <input type="text" id="username" name="username" value='<?= htmlspecialchars($username ?? ''); ?>' class="box" placeholder="Enter username" required>
                                    </div>
                                    <?php if (isset($errors['username'])): ?>
                                        <p class="text-lg text-red-600 flex items-center gap-1">
                                            <span><i class="ri-information-line"></i></span>
                                            <span><?= htmlspecialchars($errors['username'] ?? ''); ?></span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="auth__field">
                                    <label for="email">Email</label>
                                    <div class="auth__input">
                                        <i class="ri-mail-line"></i>
                                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email ?? ''); ?>" class="box" placeholder="Enter email" required>
                                    </div>
                                    <?php if (isset($errors['email'])): ?>
                                        <p class="text-lg text-red-600 flex items-center gap-1">
                                            <span><i class="ri-information-line"></i></span>
                                            <span><?= htmlspecialchars($errors['email']); ?></span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="auth__field">
                                    <label for="password">Password</label>
                                    <div class="auth__input">
                                        <i class="ri-lock-2-line"></i>
                                        <input type="password" id="password" name="password" class="box" placeholder="Enter password" required>
                                    </div>
                                    <?php if (isset($errors['password'])): ?>
                                        <p class="text-lg text-red-600 flex items-center gap-1">
                                            <span><i class="ri-information-line"></i></span>
                                            <span><?= htmlspecialchars($errors['password']); ?></span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="auth__field">
                                    <label for="confirm_password">Confirm password</label>
                                    <div class="auth__input">
                                        <i class="ri-lock-password-line"></i>
                                        <input type="password" id="confirm_password" name="confirm_password" class="box" placeholder="Confirm password" required>
                                    </div>
                                    <?php if (isset($errors['confirm_password'])): ?>
                                        <p class="text-lg text-red-600 flex items-center gap-1">
                                            <span><i class="ri-information-line"></i></span>
                                            <span><?= htmlspecialchars($errors['confirm_password']); ?></span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" name="create" class="admin__btn"><i class="ri-add-line"></i> Create user</button>
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