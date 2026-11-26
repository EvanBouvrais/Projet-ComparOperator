<?php

    if (isset($_POST['toPremium'])) {

        $operatorId = (int) $_POST['operatorId'];

        $manager->updateOperatorToPremium($operatorId);

    }

?>