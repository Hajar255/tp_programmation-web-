<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Ajouter Utilisateur</h1>
    <form action="afficher.php" method="POST">
        <div class="form-group">
            <label>Nom complet</label>
            <input type="text" name="nom" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" required minlength="8">
        </div>
        <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" name="dob" required>
        </div>
        <div class="form-group">
            <label>Pays</label>
            <select name="pays" required>
                <option value="">Sélectionnez un pays</option>
                <option>Maroc</option>
                <option>France</option>
                <option>Canada</option>
                <option>Autre</option>
            </select>
        </div>
        <div class="form-buttons">
            <button type="submit" class="btn">Ajouter</button>
        </div>
    </form>
</div>
</body>
</html>
