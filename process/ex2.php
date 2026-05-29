<?php  


// ETAPE 1 : SECURITE

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location: ../public/ex2.php?error=bad-method");
    exit();
}

if (!isset($_POST['lastname']) || !isset($_POST['firstname']) || !isset($_POST['age'])) {
    header("Location: ../public/ex2.php?error=missing-value");
    exit();
}

if (empty($_POST['lastname']) || empty($_POST['firstname']) || empty($_POST['age'])) {
    header("Location: ../public/ex2.php?error=value-empty");
    exit();
}


// INPUT SANITIZATION

$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$age = htmlspecialchars(trim($_POST['age']));


// ETAPE 2 : ON REMPLIT LA SESSION

session_start();
$_SESSION['lastname']= $lastname;
$_SESSION['firstname']= $firstname;
$_SESSION['age']= $age;

header("Location: ../public/ex2.php");
exit();

?>
