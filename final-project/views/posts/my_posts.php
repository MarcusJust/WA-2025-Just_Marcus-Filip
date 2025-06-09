<?php
session_start();
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../models/Database.php';
require_once __DIR__ . '/../../models/Post.php';

$db = (new Database())->getConnection();
$postModel = new Post($db);
$myPosts = $postModel->getByUserId($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Moje dotazy</title>
    <!-- import fontu-->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/styles.css">
</head>
<body class="main-bg d-flex flex-column min-vh-100">
<?php include_once __DIR__ . '/../partials/navbar.php'; ?>

    <main class="flex-grow-1">
        <div class="container py-4">
            <h1 class="mb-4">Moje dotazy</h1>

            <?php if (empty($myPosts)): ?>
                <div class="alert alert-info">Zatím jste nepřidali žádné dotazy.</div>
            <?php else: ?>
                <?php foreach ($myPosts as $post): ?>
                    <div class="card mb-4 shadow-sm bg-secondary rounded-4">
                        <div class="card-body">
                            <h4 class="card-title text-warning"><?= htmlspecialchars($post['title']) ?></h4>
                            <p class="card-text">
                                <?= nl2br(htmlspecialchars(mb_substr($post['content'], 0, 300))) ?>
                                <?= mb_strlen($post['content']) > 300 ? '...' : '' ?>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    Vytvořeno: <?= date('d.m.Y H:i', strtotime($post['created_at'])) ?>
                                </small>
                                <div>
                                    <a href="<?= BASE_URL ?>views/posts/detail.php?id=<?= $post['id'] ?>" class="btn btn-outline-warning btn-custom btn-sm">Číst dál</a>
                                    <a href="<?= BASE_URL ?>views/posts/edit.php?id=<?= $post['id'] ?>" class="btn btn-edit btn-custom btn-sm">Upravit</a>
                                    <a href="<?= BASE_URL ?>controllers/post_delete.php?id=<?= $post['id'] ?>" class="btn btn-delete btn-custom btn-sm" onclick="return confirm('Opravdu chcete smazat tento dotaz?');">Smazat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>

<footer class="text-center py-4 mt-5">
    <div class="container">
        <small>
            &copy; <?= date('Y') ?> Trainology
        </small>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>