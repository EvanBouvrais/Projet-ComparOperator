<?php

    if (isset($_POST['addDestination'])) {

        $destination = new Destination([
            'id' => 0,
            'location' => $_POST['location'],
            'price' => $_POST['price'],
            'tourOperatorId' => (int) $_POST['tour_operator_id']
        ]);

        $manager->createDestination($destination);

    }

?>