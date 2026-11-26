<?php



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/output.css" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@300;400;500;600;700&display=swap');</style>
    <title>Hub</title>
</head>

<body class="font-['Anton'] bg-[url('../assets/backgrounds/ciel.png')] bg-cover bg-center bg-no-repeat bg-fixed min-h-screen">

    <main class="bg-[#f5f5f5] m-4 md:m-10 xl:m-25 rounded-[35px] border-15 border-[#EDE9E9]/40 bg-clip-padding">

        <header>

            <nav class="flex flex-wrap items-center justify-between gap-5 p-6 border-b border-gray-300">

                <a href="hub.php">
                    <img src="../assets/images/Logo.png" alt="Logo" class="w-50">
                </a>

                <input type="text" id="search-bar" placeholder="Recherchez votre destination..." autocomplete="off"
                class="bg-white w-100 max-w-full h-10 shadow-[0_0_24px_rgba(0,0,0,0.15)] rounded-2xl text-center font-['Inter'] text-sm">

                <div class="flex gap-5 font-['Inter'] text-sm">

                    <a href="hub.php" class="hover:text-gray-500">Accueil</a>

                    <a href="#destinations" class="hover:text-gray-500">Destinations</a>

                    <a href="#a-propos" class="hover:text-gray-500">À propos</a>

                </div>

            </nav>

        </header>

        <div class="m-6 p-4" id="destinations">

            <h1 class="text-4xl">
                VOTRE PROCHAIN VOYAGE COMMENCE ICI.
            </h1>

            <p class="font-['Inter'] text-gray-500 mt-3">
                Comparez les offres et trouvez votre destination idéale.
            </p>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[3fr_2fr] gap-4 m-6 p-4">

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">

                <a href="operateur.php?location=Tokyo" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/japon.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">TOKYO</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Découvrez une ville entre traditions et modernité.</p>
                </a>

                <a href="operateur.php?location=New%20York" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/ViceCity.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">VICE CITY</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Explorez la ville qui ne dort jamais dans l'État de Leonida.</p>
                </a>

                <a href="operateur.php?location=Banff" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/canada.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">BANFF</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Évadez-vous au cœur des montagnes canadiennes.</p>
                </a>

                <a href="operateur.php?location=Oia" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/grece.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">OIA</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Admirez les maisons blanches et la mer Égée.</p>
                </a>

                <a href="operateur.php?location=Bangkok" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/tahilande.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">BANGKOK</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Découvrez ses temples et ses marchés animés.</p>
                </a>

                <a href="operateur.php?location=Rome" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/italie.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">ROME</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Découvrez les monuments de la ville éternelle.</p>
                </a>

                <a href="operateur.php?location=Marrakech" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/maroc.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">MARRAKECH</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Explorez ses souks et ses palais historiques.</p>
                </a>

                <a href="operateur.php?location=Monaco" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/fish.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">MONACO</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Découvrez les merveilles de la Méditerranée.</p>
                </a>

                <a href="operateur.php?location=Barcelone" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/espagne.png')] bg-cover bg-center hover:scale-105 transition duration-300"></div>
                    <h2 class="text-center text-3xl mt-2">BARCELONE</h2>
                    <p class="font-['Inter'] text-sm text-gray-600">Profitez du soleil et de l'architecture catalane.</p>
                </a>

            </div>

            <div class="bg-gray-200 rounded-xl min-h-80 bg-[url('../assets/images/maps.png')] bg-cover bg-center">
            </div>

        </div>

        <footer id="a-propos" class="bg-[#E8E8E8] rounded-b-[20px] p-10 mt-10">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <div class="flex flex-col gap-4 ">


                    <p class="font-['Inter'] text-sm text-gray-600">
                        Votre prochain voyage au meilleur prix.
                        Découvrez le monde et comparez les offres de nos tour-opérateurs.
                    </p>

                </div>

                <div class="flex flex-col gap-3">

                    <h2 class="text-2xl">NAVIGATION</h2>

                    <a href="hub.php" class="font-['Inter'] text-sm hover:underline">Accueil</a>

                    <a href="#destinations" class="font-['Inter'] text-sm hover:underline">Destinations</a>

                    <a href="operateur.php" class="font-['Inter'] text-sm hover:underline">Tour-opérateurs</a>

                </div>

                <div class="flex flex-col gap-3">

                    <h2 class="text-2xl">À PROPOS</h2>

                    <p class="font-['Inter'] text-sm text-gray-600">
                        DESTINÉTION est un comparateur de voyages qui vous aide à trouver les meilleures offres pour votre prochaine aventure.
                    </p>

                </div>

            </div>

            <div class="border-t border-gray-300 mt-8 pt-5">

                <p class="font-['Inter'] text-sm text-gray-500 text-center">
                    © 2026 DESTINÉTION - Tous droits réservés.
                </p>

            </div>

        </footer>

    </main>

</body>

</html>