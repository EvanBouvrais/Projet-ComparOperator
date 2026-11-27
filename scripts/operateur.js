//////////////////////////////////////////
// Affiche le panel au clique du bouton //
//////////////////////////////////////////

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

////////////////////////////////////////////////////////
// Garder le panel des commentaires ouvert après POST //
////////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', () => {

    const selectedOperatorId = document.body.dataset.selectedOperator;

    if (selectedOperatorId !== "0") {

        const panel = document.getElementById(`avis-${selectedOperatorId}`);

        if (panel) {

            cadre.classList.add("active");

            panel.removeAttribute('hidden');

            dernierId = selectedOperatorId;

        }

    }

});