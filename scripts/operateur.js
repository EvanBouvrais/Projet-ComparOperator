const boutons = document.querySelectorAll(".bouton-avis");
const cadre = document.querySelector(".cadre-operateur");
const commentaires = document.querySelectorAll(".avis-operateur");

let dernierId = null;

for (let bouton of boutons) {

    bouton.addEventListener("click", function () {

        let id = bouton.dataset.id;

        if (dernierId == id) {

            cadre.classList.toggle("active");

        } else {

            cadre.classList.add("active");

        }

        for (let commentaire of commentaires) {

            commentaire.hidden = true;

        }

        document.getElementById("avis-" + id).hidden = false;

        dernierId = id;

    });

}