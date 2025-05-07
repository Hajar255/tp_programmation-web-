<?php
require_once 'config.php';

// Récupérer la liste des utilisateurs
try {
    $stmt = $pdo->query("SELECT * FROM utilisateurs ORDER BY id DESC");
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la récupération des utilisateurs : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Utilisateurs</title>
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
                <th>Nom Complet</th>
                <th>Email</th>
                <th>Date de Naissance</th>
                <th>Pays</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($utilisateurs) > 0): ?>
                <?php foreach ($utilisateurs as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['nom_complet']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['date_naissance']) ?></td>
                        <td><?= htmlspecialchars($user['pays']) ?></td>
                        <td>
                            <a href="modifier.php?id=<?= $user['id'] ?>" class="btn">Modifier</a>
                            <a href="supprimer.php?id=<?= $user['id'] ?>" class="btn cancel" onclick="return confirm('Voulez-vous vraiment supprimer ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6">Aucun utilisateur trouvé.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
