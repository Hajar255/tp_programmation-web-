<form method="post">
    Nom : <input type="text" name="nom" required><br>
    Email : <input type="email" name="email" required><br>
    Message : <textarea name="message" required></textarea><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        echo "<h3>Message reçu :</h3>";
        echo "Nom : " . htmlspecialchars($_POST['nom']) . "<br>";
        echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Message : " . nl2br(htmlspecialchars($_POST['message'])) . "<br>";
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>