<?php
require_once 'config.php'; 

if (isset($_POST['nom'], $_POST['email'], $_POST['password'], $_POST['dob'], $_POST['pays'], $_POST['terms'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $dob = htmlspecialchars($_POST['dob']);
    $pays = htmlspecialchars($_POST['pays']);
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nonom_comple, email, mot_de_passe, date_naissance, pays) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $password, $dob, $pays]);

} else {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Merci pour votre inscription !</h1>
        <p><strong>Nom complet :</strong> <?php echo $nom; ?></p>
        <p><strong>Email :</strong> <?php echo $email; ?></p>
        <p><strong>Date de naissance :</strong> <?php echo $dob; ?></p>
        <p><strong>Pays :</strong> <?php echo $pays; ?></p>

        <a href="index.php" class="btn" style="display: inline-block; margin-top: 20px;">Retour</a>
    </div>
</body>
</html>


