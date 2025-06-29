<?php
session_start();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Přihlášení</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- import fontu-->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../..//public/css/styles.css">
</head>
<body class="main-bg d-flex flex-column min-vh-100">

        <?php include_once __DIR__ . '/../partials/navbar.php'; ?>

            <main class="flex-grow-1">
                <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
                    <div class="card shadow-sm border-0 rounded-4" style="max-width: 500px; width: 100%;">
                        <div class="card-header text-black text-center bg-warning" style="background-color:rgb(100, 184, 118);">
                            <h3 class="mb-0">Přihlášení</h3>
                        </div>
                        <div class="card-body bg-secondary">
                            <form action="../../controllers/login.php" method="POST" novalidate>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Uživatelské jméno <span class="text-danger">*</span></label>
                                    <input type="text" name="username" id="username" class="form-control rounded-3" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Heslo <span class="text-danger">*</span></label>
                                    <input type="password" name="password" id="password" class="form-control rounded-3" required>
                                </div>

                                <button type="submit" class="btn btn-success w-100 rounded-pill">Přihlásit se</button>
                            </form>
                        </div>
                        <div class="card-footer bg-secondary text-center border-top-0">
                            <small>Nemáte účet? <a href="register.php">Zaregistrujte se</a></small>
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