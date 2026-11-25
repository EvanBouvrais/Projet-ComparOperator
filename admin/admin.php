<?php

    require_once "../utils/autoloader.php";
    require_once "../utils/db_connect.php";

    $manager = new Manager($db);
    
    // Récupère tout les Opérateurs pour le select
    $operators = $manager->getAllOperator();

    // Inclusion du callback à createTourOperator() depuis le Manager
    include __DIR__ . "/../partials/admin/createTourOperator.php";

    // Inclusion du callback à createDestination() depuis le Manager
    include __DIR__ . "/../partials/admin/createDestination.php";

    // Inclusion du callback à updateOperatorToPremium() depuis le Manager
    include __DIR__ . "/../partials/admin/updateOperatorToPremium.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Projet-ComparOperator/styles/output.css" rel="stylesheet">
    <title>Admin</title>
</head>

<body class="w-screen h-screen overflow-hidden bg-cover bg-center bg-no-repeat 
bg-[url('../assets/backgrounds/admin-background.jpg')] text-white">

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

<script src="/Projet-ComparOperator/scripts/admin.js"></script>
</body>
</html>
