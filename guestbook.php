<form method="post">
    Nom : <input type="text" name="nom" required><br>
    Message : <textarea name="message" required></textarea><br>
    <input type="submit" value="Envoyer">
</form>

<?php
$file = "messages.txt";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entry = date("Y-m-d H:i") . " - " . $_POST['nom'] . " : " . $_POST['message'] . "\n";
    file_put_contents($file, $entry, FILE_APPEND);
}

if (file_exists($file)) {
    echo "<h3>Messages :</h3><pre>";
    echo htmlspecialchars(file_get_contents($file));
    echo "</pre>";
}
?>