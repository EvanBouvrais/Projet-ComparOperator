<?php
/** @var array $operators */
?>

<h2 class="text-xl mb-6">Ajouter une destination</h2>

<form action="/Projet-ComparOperator/admin/admin.php" method="POST"
class="flex flex-col gap-5 max-w-md">

    <div class="flex flex-col gap-2">

        <label for="location">Destination :</label>
        <input type="text" id="location" name="location" required
        class="bg-white text-black rounded-lg p-2 border-3 border-green-500 w-110 h-11">

    </div>

    <div class="flex flex-col gap-2">

        <label for="price">Prix :</label>
        <input type="number" id="price" name="price" min="0" step="0.01" required
        class="bg-white text-black rounded-lg p-2 border-3 border-green-500 w-110 h-11">

    </div>

    <div class="flex flex-col gap-2">

        <label for="tour_operator_id">TourOperator :</label>
        <select id="tour_operator_id" name="tour_operator_id" required
        class="bg-white text-black rounded-lg p-2 border-3 border-green-500 w-110 h-11">

            <option value="">Choisir un TourOperator</option>

            <?php foreach ($operators as $operator): ?>

                <option value="<?= $operator->getId() ?>">
                    <?= htmlspecialchars($operator->getName()) ?>
                </option>

            <?php endforeach; ?>

        </select>

    </div>

    <button type="submit" name="addDestination"
    class="bg-green-600 border-green-500 hover:bg-green-700
    hover:border-green-600 border-3 rounded-lg p-3 w-110 h-13">

        Ajouter la destination

    </button>

</form>