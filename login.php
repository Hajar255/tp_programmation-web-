<?php session_start(); ?>
<form method="post">
    Identifiant : <input type="text" name="username" required><br>
    Mot de passe : <input type="password" name="password" required><br>
    <input type="submit" value="Connexion">
</form>

<?php
$validUser = "admin";
$validPass = "1234";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] === $validUser && $_POST['password'] === $validPass) {
        $_SESSION['user'] = $_POST['username'];
        header("Location: bienvenue.php");
        exit();
    } else {
        echo "Identifiants incorrects.";
    }
}
?>