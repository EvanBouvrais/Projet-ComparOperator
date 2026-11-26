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

                <a href="operateur.php?location=Tokyo" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/japon.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">TOKYO</h2>
                    <p class="text-1xl font-['Inter']">Découvrez une ville entre traditions et modernité.</p>
                </a>

                <a href="operateur.php?location=New%20York" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/USA.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">NEW YORK</h2>
                    <p class="text-1xl font-['Inter']">Explorez la ville qui ne dort jamais.</p>
                </a>

                <a href="operateur.php?location=Banff" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/canada.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">BANFF</h2>
                    <p class="text-1xl font-['Inter']">Évadez-vous au cœur des montagnes canadiennes.</p>
                </a>

                <a href="operateur.php?location=Oia" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/grece.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">OIA</h2>
                    <p class="text-1xl font-['Inter']">Admirez les maisons blanches et la mer Égée.</p>
                </a>

                <a href="operateur.php?location=Bangkok" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/tahilande.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">BANGKOK</h2>
                    <p class="text-1xl font-['Inter']">Découvrez ses temples et ses marchés animés.</p>
                </a>

                <a href="operateur.php?location=Rome" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/italie.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">ROME</h2>
                    <p class="text-1xl font-['Inter']">Découvrez les monuments de la ville éternelle.</p>
                </a>

                <a href="operateur.php?location=Marrakech" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/maroc.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">MARRAKECH</h2>
                    <p class="text-1xl font-['Inter']">Explorez ses souks et ses palais historiques.</p>
                </a>

                <a href="operateur.php?location=Monaco" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/fish.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">MONACO</h2>
                    <p class="text-1xl font-['Inter']">Découvrez les merveilles de la Méditerranée.</p>
                </a>

                <a href="operateur.php?location=Barcelone" class="flex flex-col cursor-pointer">
                    <div class="bg-white rounded-xl h-40 p-4 bg-[url('../assets/images/espagne.png')] bg-cover bg-center"></div>
                    <h2 class="text-center text-3xl">BARCELONE</h2>
                    <p class="text-1xl font-['Inter']">Profitez du soleil et de l'architecture catalane.</p>
                </a>

            </div>

            <div class="bg-gray-200 rounded-xl">
                Carte
            </div>

        </div>

    </main>

</body>

</html>