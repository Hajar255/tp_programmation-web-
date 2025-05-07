<form method="post">
    Longueur du mot de passe : <input type="number" name="length" min="4" required>
    <input type="submit" value="Générer">
</form>

<?php
function genererMotDePasse($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $pass = '';
    for ($i = 0; $i < $length; $i++) {
        $pass .= $chars[random_int(0, strlen($chars) - 1)];
    }
    return $pass;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $len = $_POST['length'];
    echo "<p>Mot de passe : <strong>" . genererMotDePasse($len) . "</strong></p>";
}
?>