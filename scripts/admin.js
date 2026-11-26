////////////////////
// Boutons switch //
////////////////////

// Récupère tous les boutons possédant un attribut data-target
const buttons = document.querySelectorAll("[data-target]");

// Récupère toutes les sections de la page
const sections = document.querySelectorAll("main section");

// Parcourt les boutons
buttons.forEach(button => {

    // Écoute le clic sur chaque bouton
    button.addEventListener("click", () => {

        // Récupère l'identifiant de la section ciblée
        const targetId = button.dataset.target;

        // Masque toutes les sections
        sections.forEach(section => {
            section.classList.add("hidden");
        });

        // Affiche uniquement la section ciblée
        document.getElementById(targetId).classList.remove("hidden");

    });

});

/////////////////////////
// Pop-up mot de passe //
/////////////////////////

function closeConnexion() {
    window.location.href = "/Projet-ComparOperator/public/hub.php";
}