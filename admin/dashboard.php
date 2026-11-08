<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | FurnishMe</title>
    <link rel="icon" href="../images/favicon.ico">
    <?php require_once __DIR__ . '/components/css.php'; ?>
</head>

<body class="admin__body">
    <div class="admin__shell">
        <?php include "components/sidebar.php"; ?>
        <div class="admin__main">
            <?php include "components/topbar.php"; ?>
            <main class="admin__content">
                <div class="stats__grid">
                    <div class="stat__card">
                        <div class="icon"><i class="ri-shopping-bag-3-line"></i></div>
                        <div class="meta">
                            <span>products</span>
                            <strong>5</strong>
                        </div>
                    </div>
                    <div class="stat__card">
                        <div class="icon"><i class="ri-user-3-line"></i></div>
                        <div class="meta">
                            <span>users</span>
                            <strong>1</strong>
                        </div>
                    </div>
                    <div class="stat__card">
                        <div class="icon"><i class="ri-article-line"></i></div>
                        <div class="meta">
                            <span>blog posts</span>
                            <strong>6</strong>
                        </div>
                    </div>
                    <div class="stat__card">
                        <div class="icon"><i class="ri-team-line"></i></div>
                        <div class="meta">
                            <span>team</span>
                            <strong>6</strong>
                        </div>
                    </div>
                    <div class="stat__card">
                        <div class="icon"><i class="ri-mail-line"></i></div>
                        <div class="meta">
                            <span>contacts</span>
                            <strong>3</strong>
                        </div>
                    </div>
                    <div class="stat__card">
                        <div class="icon"><i class="ri-mail-add-line"></i></div>
                        <div class="meta">
                            <span>subscribers</span>
                            <strong>3</strong>
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