 <?php
    session_start();

    require_once "../_partials/_head.php"
    ?>

<?php

$_SESSION['UserAgent'] = "Agent";
$_SESSION['IP'] = "100.100.100";
$_SEESION['Serveur'] = "NomServeur";

setcookie();

if (isset($_SESSION['UserAgent'])) {
    echo "Votre User Agent est :" . $_SESSION['UserAgent'] .
}

?>

<?php require_once "../_partials/_footer.php" ?>