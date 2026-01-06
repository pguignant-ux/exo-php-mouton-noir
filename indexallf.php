<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=mediatheque;charset=utf8", "root", "");
$request = $pdo->query('SELECT titre, realisateur, genre, duree, synopsis FROM films');

while($data = $request->fetch()){
    

    echo "<p>Les informations sont : titre: " . $data['titre']  . "  realisateur: " . $data['realisateur'] . ", genre: " . $data['genre'] . ",  duree: " . $data['duree'] . ", synopsis: " . $data['synopsis'] . "</p>";
}
?>