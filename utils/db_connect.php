<?php

    try {
        $dsn = "mysql:HOST=localhost;dbname=comparoperator";
        $user = "root";
        $password = "";

        $db = new PDO($dsn, $user, $password);
    } catch (\PDOException $error) {
        header("location: ../public/home.php?error=connexion");
        exit;
    }

?>