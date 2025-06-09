<?php
session_start();
require_once __DIR__ . '/../../config/config.php';
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Přidat dotaz</title>
    <!-- import fontu-->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/styles.css">
</head>
<body class="main-bg d-flex flex-column min-vh-100">
<?php include_once __DIR__ . '/../partials/navbar.php'; ?>

    <main class="flex-grow-1">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow bg-dark">
                        <div class="card-header bg-warning text-black text-center">
                            <h3>Nový dotaz</h3>
                        </div>
                        <div class="card-body bg-secondary">
                            <form action="<?= BASE_URL ?>controllers/PostController.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="create">

                                <div class="mb-3">
                                    <label for="title" class="form-label main-text">Nadpis <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="content" class="form-label main-text">Obsah <span class="text-danger">*</span></label>
                                    <textarea name="content" id="content" rows="8" class="form-control" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-success w-100">Publikovat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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