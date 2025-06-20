<?php
session_start();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Registrace uživatele</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- import fontu-->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body class="main-bg d-flex flex-column min-vh-100">
        <?php include_once __DIR__ . '/../partials/navbar.php'; ?>

        <main class="flex-grow-1">
            <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
                <div class="card shadow-sm border-0 rounded-4" style="max-width: 500px; width: 100%;">
                    <div class="card-header text-black text-center bg-warning">
                        <h3 class="mb-0">Registrace</h3>
                    </div>
                    <div class="card-body bg-secondary">
                        <form action="../../controllers/register.php" method="POST" novalidate>
                            <div class="mb-3">
                                <label for="username" class="form-label">Uživatelské jméno <span class="text-danger">*</span></label>
                                <input type="text" name="username" id="username" class="form-control rounded-3" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail (nepovinný)</label>
                                <input type="email" name="email" id="email" class="form-control rounded-3">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Heslo <span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control rounded-3" required
                                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
                                    title="Minimálně 8 znaků, alespoň jedno velké písmeno a jedno číslo">
                            </div>

                            <div class="mb-3">
                                <label for="password_confirm" class="form-label">Potvrzení hesla <span class="text-danger">*</span></label>
                                <input type="password" name="password_confirm" id="password_confirm" class="form-control rounded-3" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100 rounded-pill">Registrovat se</button>
                        </form>
                    </div>
                    <div class="card-footer bg-secondary text-center border-top-0">
                        <small>Už máte účet? <a href="login.php">Přihlaste se</a></small>
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


        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Klientská kontrola hesla -->
        <script>
            const form = document.querySelector('form');
            const pass = document.getElementById('password');
            const confirm = document.getElementById('password_confirm');

            form.addEventListener('submit', function (e) {
                if (pass.value !== confirm.value) {
                    e.preventDefault();
                    alert('Hesla se neshodují.');
                }
            });
        </script>

</body>
</html>