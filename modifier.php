<?php
require_once 'config.php';

if (!isset($_GET['id'])) {
    header('Location: utilisateurs.php');
    exit();
}

$id = (int) $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if (!$user) {
    header('Location: utilisateurs.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $pays = htmlspecialchars($_POST['pays']);

    $stmt = $pdo->prepare("UPDATE utilisateurs SET nom = ?, email = ?, dob = ?, pays = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $dob, $pays, $id]);

    header('Location: utilisateurs.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Modifier Utilisateur</h1>
    <form method="POST">
        <div class="form-group">
            <label>Nom complet</label>
            <input type="text" name="nom" value="<?= htmlspecialchars($user['nom']) ?>" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" name="dob" value="<?= htmlspecialchars($user['dob']) ?>" required>
        </div>
        <div class="form-group">
            <label>Pays</label>
            <input type="text" name="pays" value="<?= htmlspecialchars($user['pays']) ?>" required>
        </div>
        <div class="form-buttons">
            <button type="submit" class="btn">Modifier</button>
            <a href="utilisateurs.php" class="btn cancel">Annuler</a>
        </div>
    </form>
</div>
</body>
</html>
