<?php
/** @var array $operators */
?>

<h2 class="text-xl mb-6">Passer un TourOperator en Premium</h2>

<form action="/Projet-ComparOperator/admin/admin.php" method="POST"
class="flex flex-col gap-5 max-w-md">

    <div class="flex flex-col gap-2">

        <label for="operatorPremium">Choisir un TourOperator :</label>

        <select id="operatorPremium" name="operatorId" required
        class="bg-white text-black rounded-lg p-2 border-3 border-green-500 w-110 h-11">

            <option value="">Choisir un TourOperator</option>

            <?php foreach ($operators as $operator): ?>

                <option value="<?= $operator->getId() ?>">
                    <?= htmlspecialchars($operator->getName()) ?>
                </option>

            <?php endforeach; ?>

        </select>

    </div>

    <button type="submit" name="toPremium"
    class="bg-green-600 border-green-500 hover:bg-green-700
    hover:border-green-600 border-3 rounded-lg p-3 w-110 h-13">

        Passer en Premium

    </button>

</form>