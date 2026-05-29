<?php 
// ETAPE 1 : SECURITE


if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location: ../public/ex3.php?error=bad-method");
    exit();
}


if (!isset($_POST['login']) || !isset($_POST['login'])) {
    header("Location: ../public/ex3.php?error=missing-value");
    exit();
}

if (empty($_POST['password']) || empty($_POST['password'])) {
    header("Location: ../public/ex3.php?error=value-empty");
    exit();
}



// INPUT SANITIZATION

$login = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars(trim($_POST['password']));

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);



// STOCKAGE DANS DES COOKIES
setcookie('login', $login, time() + (1 * 24 * 3600));
setcookie('password', $password, time() + (1 * 24 * 3600));

$_COOKIE['login'] = $login;
$_COOKIE['password'] = $password;

header("Location: ../public/ex3.php");
exit();

?>