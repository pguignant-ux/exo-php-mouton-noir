
<br><br>

<br><br>
<form method="POST">
    <label>Titre :</label>
    <input type="text" name="titre" required>
    <br>

    <label>Réalisateur :</label>
    <input type="text" name="realisateur" required>
    <br>

    <label>Genre :</label>
    <input type="text" name="genre" required>
    <br>

    <label>Durée :</label>
    <input type="number" name="duree" required>
    <br>

    <label>Synopsis :</label>
    <input type="text" name="synopsis" required>
    <br><br>

    <button type="submit">Ajouter une fiche de film</button>
</form>

<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=mediatheque;charset=utf8", "root", "");


if (!empty($_POST['titre']) && !empty($_POST['realisateur']) && !empty($_POST['genre']) && !empty($_POST['duree']) && !empty($_POST['synopsis'])) {

    $stmt = $pdo->prepare("INSERT INTO films (titre, realisateur, genre, duree, synopsis) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['titre'], $_POST['realisateur'], $_POST['genre'], $_POST['duree'], $_POST['synopsis']]);

    echo "<p>Film ajouté avec succès !</p>";
}


$request = $pdo->query('SELECT titre, realisateur, genre, duree, synopsis FROM films');

while($data = $request->fetch()){
    echo "<p>Les informations sont : " . $data['titre'] . ", " . $data['realisateur'] . ", " . $data['genre'] . ", " . $data['duree'] . ", " . $data['synopsis'] . "</p>";
}
?>