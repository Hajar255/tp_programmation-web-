<form method="post">
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Soustraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select>
    <input type="submit" value="Calculer">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operation'];
    switch ($op) {
        case 'add': $result = $a + $b; break;
        case 'sub': $result = $a - $b; break;
        case 'mul': $result = $a * $b; break;
        case 'div':
            $result = ($b != 0) ? $a / $b : "Erreur : division par zéro";
            break;
    }
    echo "<p>Résultat : $result</p>";
}
?>