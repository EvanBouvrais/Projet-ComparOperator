<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/output.css" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@300;400;500;600;700&display=swap');</style>
    <title>Hub</title>
</head>

<body class="font-['Anton'] bg-[url('../assets/backgrounds/ciel.png')] bg-cover bg-center bg-no-repeat bg-fixed min-h-screen">

    <main class="bg-[#f5f5f5] m-25 rounded-[35px] border-15 border-[#EDE9E9]/40 bg-clip-padding">

        <header>

            <nav class="relative flex items-center w-full pb-10 mb-20 pt-10 mt-5">

                <img src="../assets/images/Logo.png" alt="Logo" class="w-50 absolute left-0">

                <input type="text" id="search-bar" placeholder="Recherchez votre destination..." autocomplete="off"
                class="w-100 h-10 shadow-[0_0_24px_rgba(0,0,0,0.20)] rounded-2xl placeholder:text-center row mx-auto">

            </nav>

        </header>

        <div class="grid grid-cols-[2fr_3fr] gap-4 m-6 p-4">

            <div class="grid grid-cols-3 gap-2">

                <!-- Japon -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/japon.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">JAPON</h2>
                    <p class="text-1xl font-['Inter']">Découvrez les traditions japonaises.</p>
                </div>

                <!-- États-Unis -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/USA.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">ÉTATS-UNIS</h2>
                    <p class="text-1xl font-['Inter']">Explorez des villes et des paysages mythiques.</p>
                </div>

                <!-- Canada -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/canada.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">CANADA</h2>
                    <p class="text-1xl font-['Inter']">Évadez-vous au cœur des grands espaces.</p>
                </div>

                <!-- Grèce -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/grece.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">GRÈCE</h2>
                    <p class="text-1xl font-['Inter']">Entre îles paradisiaques et histoire antique.</p>
                </div>

                <!-- Thaïlande -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/tahilande.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">THAÏLANDE</h2>
                    <p class="text-1xl font-['Inter']">Découvrez des plages tropicales et des temples magnifiques.</p>
                </div>

                <!-- Italie -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/italie.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">ITALIE</h2>
                    <p class="text-1xl font-['Inter']">Savourez un mélange d'art, d'histoire et de gastronomie.</p>
                </div>

                <!-- Maroc -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/maroc.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">MAROC</h2>
                    <p class="text-1xl font-['Inter']">Explorez des médinas colorées et des déserts majestueux.</p>
                </div>

                <!-- Océan -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/fish.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">OCÉAN</h2>
                    <p class="text-1xl font-['Inter']">Plongez dans les profondeurs à la rencontre du poisson.</p>
                </div>

                <!-- Espagne -->
                <div class="flex flex-col">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/espagne.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">ESPAGNE</h2>
                    <p class="text-1xl font-['Inter']">Profitez du soleil, de la culture et de la Méditerranée.</p>
                </div>

            </div>

            <div class="bg-gray-200 rounded-xl">
                Carte
            </div>


    </main>

</body>

</html>