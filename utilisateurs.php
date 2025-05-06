<?php
require_once 'config.php';

$stmt = $pdo->query("SELECT * FROM utilisateurs ORDER BY id DESC");
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Liste des Utilisateurs</h1>

    <a href="index.php" class="btn" style="margin-bottom: 20px;">Ajouter Nouveau</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de naissance</th>
                <th>Pays</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($utilisateurs as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['nom']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['dob']) ?></td>
                    <td><?= htmlspecialchars($user['pays']) ?></td>
                    <td>
                        <a href="modifier.php?id=<?= $user['id'] ?>" class="btn">Modifier</a>
                        <a href="supprimer.php?id=<?= $user['id'] ?>" class="btn cancel" onclick="return confirm('Voulez-vous vraiment supprimer ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
