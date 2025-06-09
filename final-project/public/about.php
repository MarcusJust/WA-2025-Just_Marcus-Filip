<?php include_once '../views/partials/navbar.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>O tématu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- import fontu-->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body class="main-bg d-flex flex-column min-vh-100">

<main class="flex-grow-1">
    <div class="container py-5">

        <!-- První sekce -->
        <div class="p-4 rounded-4 shadow-sm mb-5 main-text">
            <h1 class="text-warning mb-4">O Trainology</h1>

            <p>Trainology je web stvořený pro komunitu okolo fitness.</p>

            <p>Naším cílem je předat čtenáři základy pro cvičení jako takové. Zároveň ale propojit členy komunity. Dát možnost ptát se a odpovídat. Učit sebe i ostatní.</p>

            <p>Níže se podíváme na naše tipy a doporučení pro začáteky. Od prvních treninku po suplementaci.</p>

        </div>

        <div class="p-4 rounded-4 shadow-sm mb-5 main-text">
            <h1 class="text-warning mb-4">Proč začít?</h1>

            <p>Začít s fitness je jedním z nejlepších rozhodnutí, které můžete pro své tělo i mysl udělat. Pravidelný pohyb má zásadní vliv na zdraví. Pomáhá totiž snižovat riziko civilizačních chorob, jako jsou srdeční onemocnění, vysoký tlak, cukrovka 2. typu nebo obezita. Kromě toho posiluje imunitní systém a zlepšuje kvalitu spánku, díky čemuž se člověk cítí celkově lépe a plný energie.</p>

            <p>Fitness ale není jen o fyzickém zdraví. Při cvičení se v těle uvolňují endorfiny, tedy tzv. hormony štěstí, které výrazně zlepšují náladu a pomáhají zvládat stres, úzkosti nebo i příznaky deprese. S rostoucí fyzickou silou a zlepšující se kondicí přichází také větší sebedůvěra, a to nejen co se týče vzhledu, ale i vnitřního pocitu kontroly a stability.</p>

            <p>Další výhodou pravidelného tréninku je nárůst energie a lepší výkonnost. Člověk má víc síly, větší výdrž a lépe se soustředí. Zároveň se zlepšuje držení těla a postava, což může být motivací samo o sobě. Fitness navíc učí disciplíně a pravidelnosti, což jsou návyky, které se pozitivně promítají i do ostatních oblastí života, jako je práce, studium nebo osobní rozvoj.</p>
            
            <p>V neposlední řadě má fitness i společenský rozměr. Cvičení v posilovně, účast na skupinových lekcích nebo třeba běhání s přáteli může být skvělým způsobem, jak navázat nové vztahy a cítit se součástí komunity.</p>

            <h1 class="mb-4 text-warning">Jak začít?</h1>
            
            <a href="index.php" class="btn btn-outline-warning rounded-pill mt-4">Zpět na hlavní stránku</a>
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