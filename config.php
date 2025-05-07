<?php
$pdo = new PDO("mysql:host=localhost;dbname=inscription_db", "root", "");

// Vérifie si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom_complet, email, mot_de_passe) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $password]);

    echo "Inscription réussie !";
}
?>
