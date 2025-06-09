<?php include_once '../views/partials/navbar.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Trainology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- import fontu-->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <!-- Vlastní CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="main-bg d-flex flex-column min-vh-100">
    <main class="flex-grow-1">
        <!-- "baner" -->
        <section class="hero-section text-white text-center d-flex align-items-center" style="background: url('images/gym.jpg') center/cover no-repeat; min-height: 500px;">
            <div class="container">
                <div class="bg-dark bg-opacity-50 p-5 rounded-4">
                    <h1 class="display-4 fw-bold mb-3">My vám pomůžeme!</h1>
                    <p class="lead mb-4" style="font-size: 25px">Chcete začít cvičit a nevíte si rady? Nebo snad chcete pomoct někomu začít? Pak jste tu správně.</p>
                    <a href="<?= BASE_URL ?>public/about.php" class="btn btn-warning btn-lg rounded-pill px-4">Zjisti více</a>
                </div>
            </div>
        </section>


        <!-- OBSAH (KOMUNITA) -->
        <section class="container mt-5">
            <div class="row g-4">

            <!-- KOMUNITA -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-4 rounded-4 bg-dark shadow-sm">
                        <h2 class="text-warning mb-4">Nejnovější dotazy</h2>

                        <?php
                        // Připojení k DB a načtení posledních 5 dotazů
                        require_once '../models/Database.php';
                        $db = (new Database())->getConnection();
                        $stmt = $db->query("SELECT id, title, content FROM posts ORDER BY created_at DESC LIMIT 5");
                        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($posts as $post): ?>
                            <div class="mb-4 p-3 rounded-3 border bg-secondary">
                                <h5 class="fw-bold"><?= htmlspecialchars($post['title']) ?></h5>
                                <p><?= htmlspecialchars(mb_substr($post['content'], 0, 100)) ?>...</p>
                                <a href="<?= BASE_URL ?>views/posts/detail.php?id=<?= $post['id'] ?>" class="btn btn-outline-warning btn-sm rounded-pill">Číst dále</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </section>
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