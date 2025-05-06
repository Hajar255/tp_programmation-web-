<?php
require_once 'config.php';

if (isset($_POST['nom'], $_POST['email'], $_POST['password'], $_POST['dob'], $_POST['pays'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $dob = htmlspecialchars($_POST['dob']);
    $pays = htmlspecialchars($_POST['pays']);

    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email, password, dob, pays) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $password, $dob, $pays]);
    header('Location: utilisateurs.php');
} else {
    header('Location: index.php');
}
?>
