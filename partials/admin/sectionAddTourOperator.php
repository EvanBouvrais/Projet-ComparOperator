<h2 class="text-xl mb-6">Ajouter un TourOperator</h2>

<form action="/Projet-ComparOperator/admin/admin.php" method="POST"
class="flex flex-col gap-5 max-w-md">

    <div class="flex flex-col gap-2">

        <label for="name">Nom du TourOperator :</label>
        <input type="text" id="name" name="name" required 
        class="bg-white text-black rounded-lg p-2 border-3 border-green-500 w-110 h-11">

    </div>

    <div class="flex flex-col gap-2">

        <label for="link">Lien du TourOperator :</label>
        <input type="url" id="link" name="link" required 
        class="bg-white text-black rounded-lg p-2 border-3 border-green-500 w-110 h-11">

    </div>

    <button type="submit" name="addTourOperator"
    class="bg-green-600 border-green-500 hover:bg-green-700 
    hover:border-green-600 border-3 rounded-lg p-3 w-110 h-13">

        Ajouter le TourOperator

    </button>

</form>