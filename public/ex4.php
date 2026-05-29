<?php require_once "../_partials/_head.php" ?>
<?php   

$identifiants = json_decode($_COOKIE['identifiants'], true);

?>

<?php if (isset($_COOKIE['identifiants']) && !empty($_COOKIE['identifiants'])) { ?>

    <p>
        <?= $identifiants['login']; ?>
        <?= $identifiants['password']; ?>
    </p>

<a href="./ex3.php">Formulaire ex3</a>

<?php } 
require_once "../_partials/_footer.php" ?>