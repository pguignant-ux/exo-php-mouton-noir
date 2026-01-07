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
  
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom) VALUES (?, ?)");
    $stmt->execute([$_POST['nom'], $_POST['prenom']]);
    echo "Utilisateur ajouté avec succès !";
}
?>
<a href="indexf.php">
<button type="submit">Ajouter une fiche de film</button></a>
<br><br>
<a href="indexallf.php">
<button type="submit">Voir les films</button></a>


<!--  limite de compréhension atteinte.
une citation qui m'ai toujours resté
« Tu me dis, j’oublie. Tu m’enseignes, je me souviens. Tu m’impliques, j’apprends. » -->

<h1>Comme je ne veux pas te surtout pas te deranger et pour evité les fausse rumeurs je ne rest pas sasns rien faire j essaye de comblé mes lacune qui son nombreuse en suivanr des tutos https://www.youtube.com/watch?v=TsOFRKrHBI8</h1>
</body>
</html>