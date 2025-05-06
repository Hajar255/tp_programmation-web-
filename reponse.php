<?php
// Sécurisation avec strip_tags
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
  <p><strong>Nom :</strong> <?= $nom ?></p>
  <p><strong>Prénom :</strong> <?= $prenom ?></p>
  <p><strong>Email :</strong> <?= $email ?></p>
  <p><strong>Message :</strong><br><?= nl2br($message) ?></p>
</body>
</html>
