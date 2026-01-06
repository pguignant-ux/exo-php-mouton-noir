<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
<form method="POST">

    <label>Nom :</label>
    <input type="text" name="nom" required>
    <br>

    <label>Prénom :</label>
    <input type="text" name="prenom" required>
    <br>

    <button type="submit">Ajouter</button>
</form>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8','root','');
$request = $bdd->query ('SELECT nom, prenom FROM users')
?>
<?php

while($data = $request->fetch()){
    echo "<p>le nom est  " . $data['nom'] . "  et le prénom est  " . $data['prenom'] ."</p>";
    }
?>

<?php
$pdo = new PDO(
        "mysql:host=localhost;dbname=mediatheque;charset=utf8",
        "root",
        ""
    );


if (!empty($_POST['nom']) && !empty($_POST['prenom'])) {
    // Préparation de la requête INSERT
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom) VALUES (?, ?)");
    $stmt->execute([$_POST['nom'], $_POST['prenom']]);
    echo "Utilisateur ajouté avec succès !";
}
?>
<br><br>

<br><br>
<form method="POST">

    <label>titre :</label>
    <input type="text" name="titre" required>
    <br>

    <label>realisateur :</label>
    <input type="text" name="realisateur" required>
    <br>

    <label>genre :</label>
    <input type="text" name="genre" required>
    <br>

    <label>duree :</label>
    <input type="time" name="duree" required>
    <br>
    <label>synopsis :</label>
    <input type="text" name="synopsis" required>
    <br><br>

    <button type="submit">ajouter une fiche de film</button>
</form>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8','root','');
$request = $bdd->query ('SELECT titre, FROM films')
?>
<?php

while($data = $request->fetch()){
    echo "<p>le nom est  " . $data['titre'] . " $data['prenom'] ."</p>";
    }
?>

<?php
$pdo = new PDO(
        "mysql:host=localhost;dbname=mediatheque;charset=utf8",
        "root",
        ""
    );


if (!empty($_POST['film']) && !empty($_POST[''])) {
    // Préparation de la requête INSERT
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom) VALUES (?, ?)");
    $stmt->execute([$_POST['nom'], $_POST['prenom']]);
    echo "Utilisateur ajouté avec succès !";
}
?>


</body>
</html>