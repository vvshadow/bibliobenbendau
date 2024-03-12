<?php
include "modele/db.php";

$serveur = 'localhost';
$user  = 'bibliotheque';
$mot_de_passe = 'meSdEkETU2m5i}!' ;

$conn = new mySQLI ($serveur, $user, $mot_de_passe);



if ($connexion->connect_error) {
   die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}


$titre = $_GET['titre'];
$genre = $_GET['genre'];


$sql = "SELECT * FROM livres WHERE titre LIKE '%$titre%' AND genre LIKE '%$genre%'";


$resultat = $connexion->query($sql);


$connexion->close();

?>
