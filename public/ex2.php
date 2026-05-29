<?php require_once "../_partials/_head.php" ?>

<?php
session_start();

if (
    isset($_SESSION['lastname']) && isset($_SESSION['firstname']) && isset($_SESSION['age']) &&
    !empty($_SESSION['lastname']) && !empty($_SESSION['firstname']) && !empty($_SESSION['age'])
) { ?>
    
    <p>
        <?=  $_SESSION['lastname']?>
        <?=  $_SESSION['firstname']?>
        <?=  $_SESSION['age']?>
    </p>

<?php } else {


?>

<form action="../process/ex2.php" method="post">

    <label for="lastname">lastname</label>
    <input type="text" name="lastname" id="lastname">

    <label for="firstname">firstname </label>
    <input type="text" name="firstname" id="firstname">

    <label for="age">age</label>
    <input type="text" name="age" id="age">

    <button type="submit">Envoyer</button>

</form>

<?php } 
require_once "../_partials/_footer.php" ?>