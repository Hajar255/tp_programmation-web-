<form method="post">
    1. Capital de la France ?<br>
    <input type="radio" name="q1" value="Paris" required>Paris
    <input type="radio" name="q1" value="Lyon">Lyon<br>

    2. 2 + 2 = ?<br>
    <input type="radio" name="q2" value="3" required>3
    <input type="radio" name="q2" value="4">4<br>

    3. Langage serveur ?<br>
    <input type="radio" name="q3" value="PHP" required>PHP
    <input type="radio" name="q3" value="HTML">HTML<br>

    <input type="submit" value="Valider">
</form>

<?php
$score = 0;
$answers = ['q1' => 'Paris', 'q2' => '4', 'q3' => 'PHP'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($answers as $q => $correct) {
        if (isset($_POST[$q])) {
            $given = $_POST[$q];
            if ($given === $correct) $score++;
            echo "Question " . substr($q, 1) . " : " . ($given === $correct ? "✔️ Correct" : "❌ Faux (rép. : $correct)") . "<br>";
        }
    }
    echo "<p>Score final : $score / " . count($answers) . "</p>";
}
?>