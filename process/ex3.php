<?php 
// var_dump($_POST);
// die();

// ETAPE 1 : SECURITE


if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location: ../public/ex3.php?error=bad-method");
    exit();
}


if (!isset($_POST['login']) || !isset($_POST['password'])) {
    header("Location: ../public/ex3.php?error=missing-value");
    exit();
}

if (empty($_POST['login']) || empty($_POST['password'])) {
    header("Location: ../public/ex3.php?error=value-empty");
    exit();
}



// INPUT SANITIZATION

$login = htmlspecialchars(trim($_POST['login']));

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$identifiants = [
    'login' => $login,
    'password' => $password
];

$identifiants = json_encode($identifiants);



// STOCKAGE DANS DES COOKIES
setcookie('identifiants', $identifiants, time() + (1 * 24 * 3600), '/PHP%20-%20Session%20-%20Cookies');

header("Location: ../public/ex4.php");
exit();

?>