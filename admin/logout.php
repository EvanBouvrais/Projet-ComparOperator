<?php

session_start();

session_unset();
session_destroy();

header('Location: /Projet-ComparOperator/public/hub.php');
exit;

?>