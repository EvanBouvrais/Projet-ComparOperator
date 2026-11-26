<?php

    if (isset($_POST['addTourOperator'])) {

            $tourOperator = new TourOperator([
                'id' => 0,
                'name' => $_POST['name'],
                'link' => $_POST['link'],
                'grade_count' => 0,
                'grade_total' => 0,
                'is_premium' => 0
            ]);

            $manager->createTourOperator($tourOperator);

            echo "TourOperator ajouté avec succès !";

        }

?>