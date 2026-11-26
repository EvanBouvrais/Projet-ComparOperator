<?php

    require_once '../utils/autoloader.php';
    require_once '../utils/db_connect.php';

    $manager = new Manager($db);
    
    $password = "Admin";

    $location = $_GET['location'] ?? '';

    if ($location != '') {

        $operators = $manager->getOperatorsByLocation($location);
        $prices = $manager->getPricesByLocation($location);

    } else {

        $operators = $manager->getAllOperator();
        $prices = $manager->getLowestPricesByOperator();

    }

    // dégage l'erreur Intelephense
    $errorsReview = [];

    // Traitement du nouveau commentaire
    if (isset($_POST['addReview'])) {

        $author = trim($_POST['name']);
        $operatorId = (int) $_POST['tour_operator_id'];

        if (!$manager->hasAlreadyReviewed($author, $operatorId)) {

            $review = new Reviews([
                'id' => 0,
                'author' => $author,
                'message' => $_POST['commentaire'],
                'tour_operator_id' => $operatorId
            ]);

            $manager->createReview($review);

        } else {

            $errorsReview[$operatorId] = "Vous avez déjà posté un commentaire pour cet opérateur.";

        }
    }

    // Récupération des commentaires
    $reviews = [];

    foreach ($operators as $operator) {

        $reviews[$operator->getId()] = $manager->getReviewByOperatorId($operator->getId());

    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../styles/output.css" rel="stylesheet">
    <link href="../styles/operateur.css" rel="stylesheet">

    <script src="../scripts/operateur.js" defer></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@300;400;500;600;700&display=swap');
    </style>

    <title>DESTINÉTION - Tour-opérateurs</title>
</head>

<body class="font-['Anton'] bg-[url('../assets/backgrounds/ciel.png')] bg-cover bg-center bg-no-repeat bg-fixed min-h-screen">

    <main class="cadre-operateur bg-[#f5f5f5] m-25 rounded-[35px] border-15 border-[#EDE9E9]/40 bg-clip-padding">

        <header>

            <nav class="relative flex items-center w-full pb-10 mb-20 pt-10 mt-5">
                <a href="hub.php">
                    <img src="../assets/images/Logo.png" alt="Logo" class="w-50 absolute left-0">
                </a> 
            </nav>

        </header>

        <section class="section-avis">

            <div>

                <?php foreach ($operators as $operator) { ?>

                    <div class="border-2 border-gray-300 p-5 m-5 rounded-2xl flex">

                        <div class="w-3/4">

                            <h2 class="text-3xl">
                                <?= htmlspecialchars($operator->getName()) ?>
                            </h2>

                            <p class="text-amber-400 text-3xl mt-3">
                                <?= $operator->getStars() ?>
                            </p>

                            <p class="font-['Inter'] text-sm mt-3">
                                Découvrez les avis des voyageurs.
                            </p>

                        </div>

                        <div class="w-1/4 border-l-2 border-gray-300 flex flex-col items-center justify-center">

                            <p class="font-['Inter'] text-gray-500 text-sm">
                                À partir de
                            </p>

                            <p class="text-5xl">
                                <?= $prices[$operator->getId()] ?? '--' ?> €
                            </p>

                            <button data-id="<?= $operator->getId() ?>"
                                class="bouton-avis bg-black text-white rounded-xl px-5 py-2 mt-3 cursor-pointer">

                                Voir les avis

                            </button>

                        </div>

                    </div>

                <?php } ?>

            </div>

            <div class="panneau-avis border-2 border-gray-300 rounded-2xl m-5 p-5">

                <h2 class="text-3xl text-center">COMMENTAIRES</h2>

                <?php foreach ($operators as $operator) { ?>

                    <div class="avis-operateur" id="avis-<?= $operator->getId() ?>" hidden>

                        <h2 class="text-2xl mt-5">

                            <?= htmlspecialchars($operator->getName()) ?>

                        </h2>

                        <form action="operateur.php?location=<?= urlencode($location) ?>" method="POST"
                        class="border-2 border-gray-300 rounded-xl p-4 mt-4 flex flex-col gap-3">

                            <fieldset class="flex flex-col gap-3">

                                <legend class="mb-2 ml-2.5">Nouveau commentaire</legend>

                                <input type="hidden" name="tour_operator_id" value="<?= $operator->getId() ?>">

                                <input placeholder="Nom" required type="text" name="name"
                                class="border-2 rounded-[9px] border-gray-300 px-2">

                                <?php if (isset($errorsReview[$operator->getId()])) { ?>

                                    <p class="text-red-600 text-sm font-['Inter']">

                                        <?= htmlspecialchars($errorsReview[$operator->getId()]) ?>

                                    </p>

                                <?php } ?>

                                <textarea placeholder="Votre avis..." required name="commentaire"
                                rows="4" class="border-2 rounded-[9px] border-gray-300 px-2"></textarea>

                                <button type="submit" name="addReview"
                                class="bg-black text-white w-25 h-9 rounded-[9px] mx-auto">
                                    Poster
                                </button>

                            </fieldset>

                        </form>


                        <?php foreach ($reviews[$operator->getId()] as $review) { ?>

                            <div class="border-2 border-gray-300 rounded-xl p-4 mt-4">

                                <h3 class="font-['Inter'] font-bold">
                                    <?= htmlspecialchars($review->getAuthor()) ?>
                                </h3>

                                <p class="font-['Inter'] text-sm mt-2">
                                    <?= htmlspecialchars($review->getMessage()) ?>
                                </p>

                            </div>

                        <?php } ?>

                        <?php if (empty($reviews[$operator->getId()])) { ?>

                            <p class="font-['Inter'] mt-4">
                                Aucun commentaire pour le moment.
                            </p>

                        <?php } ?>

                    </div>

                <?php } ?>

            </div>

        </section>

    </main>

</body>

</html>