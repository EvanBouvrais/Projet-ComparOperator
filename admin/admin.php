<?php

    session_start();

    $passwordHash = '$2y$10$6ZrU/B1q4oFgktgEMJvCL.kABLbBW7.UZcm3ECaWK0fJgkSxwRGsa';

    $error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {

        if (password_verify($_POST['password'], $passwordHash)) {

    session_regenerate_id(true);
    $_SESSION['admin_authenticated'] = true;

    header('Location: /Projet-ComparOperator/admin/admin.php');
    exit;

    } else {

        $error = "Mot de passe incorrect.";

    }
    }

    $accessGranted = $_SESSION['admin_authenticated'] ?? false;

    if ($accessGranted) {

        require_once "../utils/autoloader.php";
        require_once "../utils/db_connect.php";

        $manager = new Manager($db);

        $operators = $manager->getAllOperator();

        include __DIR__ . "/../partials/admin/createTourOperator.php";
        include __DIR__ . "/../partials/admin/createDestination.php";
        include __DIR__ . "/../partials/admin/updateOperatorToPremium.php";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Operator/Projet-ComparOperator/styles/output.css" rel="stylesheet">
    <title>Admin</title>
</head>

<body class="w-screen h-screen overflow-hidden bg-cover bg-center bg-no-repeat 
bg-[url('../assets/backgrounds/admin-background.jpg')] text-white">

    <!-- Fenêtre pop-up de connexion -->
    <section id="fenetreConnexion"
    class="<?= $accessGranted ? 'hidden' : 'flex' ?> fixed inset-0 z-50 bg-black/60 items-center justify-center p-4">

        <div class="bg-[#1a1f1b] border-green-500 border-3 rounded-xl p-6 w-full max-w-md">

            <div class="flex justify-between items-center mb-4">

                <h2 class="text-white text-xl font-bold">
                    Accès administrateur
                </h2>

                <button type="button" onclick="closeConnexion()"
                    class="text-white text-2xl">
                    x
                </button>

            </div>

            <form action="/Projet-ComparOperator/admin/admin.php" method="POST" class="flex flex-col gap-4">

                <label for="password" class="text-white">
                    Mot de passe
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autofocus
                    class="w-full rounded-md p-2 bg-[#121413] text-white border-green-500 border"
                    placeholder="le mot de passe c'est Admin le dit à personne"
                >

                <?php if ($error !== '') { ?>
                    <p class="text-red-400 text-sm">
                        <?= htmlspecialchars($error) ?>
                    </p>
                <?php } ?>

                <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 border-3
                border-green-500 hover:border-green-600 text-white rounded-md p-2">

                    Se connecter
                    
                </button>

            </form>

        </div>

    </section>

    <?php if ($accessGranted) { ?>

        <main class="bg-black/55 rounded-2xl m-15 h-[calc(100svh-7.5rem)] p-10">

            


            <header>

                <?php 
                    include __DIR__ . "/../partials/admin/header.php";
                ?>

            </header>

            
            
            <div class="flex justify-center mt-15">

                <section id="sectionAddTourOperator" class="flex flex-col justify-center">

                    <?php 
                        include __DIR__ . "/../partials/admin/sectionAddTourOperator.php";
                    ?>

                </section>



                <section id="sectionAddDestination" class="hidden flex-col justify-center">

                    <?php 
                        include __DIR__ . "/../partials/admin/sectionAddDestination.php";
                    ?>

                </section>



                <section id="sectionToPremium" class="hidden flex-col justify-center">

                    <?php 
                        include __DIR__ . "/../partials/admin/sectionToPremium.php";
                    ?>

                </section>

            </div>

        </main>

    <?php } ?>

<script src="/Projet-ComparOperator/scripts/admin.js"></script>
</body>
</html>
