<?php

<<<<<<< HEAD
include "modele/db.php"

$serveur = 'localhost';
$user  = 'bibliotheque';
$mot_de_passe = 'meSdEkETU2m5i}!' ;
=======
//requete Livres
$requiser = $bdd->prepare('SELECT * FROM Livre');
$donneesLivres = $bdd->query($requiser);
$selectLivre = $donneesLivres->fetch();
>>>>>>> 4312698494dd06410a00d06060571c515868698c


$conn = new mySQLI ($serveur, $user, $mot_de_passe);


<<<<<<< HEAD
if ($connexion->connect_error) {
   die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}


$titre = $_GET['titre'];
$genre = $_GET['genre'];


$sql = "SELECT * FROM livres WHERE titre LIKE '%$titre%' AND genre LIKE '%$genre%'";


$resultat = $connexion->query($sql);


$connexion->close();

?>
=======
//requetes auteurs
$codeAuteur = $bdd->prepare('SELECT auteur FROM livre');
$donneesAuteur = $bdd->query($donneesAuteur);
$selectAuteur = $donneesAuteur->fetch();
?>
>>>>>>> 4312698494dd06410a00d06060571c515868698c
