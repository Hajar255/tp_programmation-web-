<?php
// Sécurisation des entrées
$nom = isset($_POST['nom']) ? strip_tags($_POST['nom']) : '';
$prenom = isset($_POST['prenom']) ? strip_tags($_POST['prenom']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$message = isset($_POST['message']) ? strip_tags($_POST['message']) : '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Réponse du formulaire</title>
</head>
<body>
  <h1>Merci pour votre message</h1>
  <p><strong>Nom :</strong> <?= htmlspecialchars($nom) ?></p>
  <p><strong>Prénom :</strong> <?= htmlspecialchars($prenom) ?></p>
  <p><strong>Email :</strong> <?= htmlspecialchars($email) ?></p>
  <p><strong>Message :</strong><br><?= nl2br(htmlspecialchars($message)) ?></p>
</body>
</html>
