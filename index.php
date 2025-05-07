<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form action="afficher.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom complet</label>
                <input type="text" name="nom" id="nom" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required minlength="8">
            </div>

            <div class="form-group">
                <label for="dob">Date de naissance</label>
                <input type="date" name="dob" id="dob" required>
            </div>

            <div class="form-group">
                <label for="pays">Pays</label>
                <select name="pays" id="pays" required>
                    <option value="">Sélectionnez un pays</option>
                    <option>Maroc</option>
                    <option>France</option>
                    <option>Canada</option>
                    <option>Autre</option>
                </select>
            </div>

            <div class="form-group checkbox">
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms">J'accepte les conditions d'utilisation</label>
            </div>

            <div class="form-buttons">
                <button type="submit" class="btn">Envoyer</button>
                <button type="reset" class="btn cancel">Annuler</button>
            </div>
        </form>
    </div>
</body>
</html>
