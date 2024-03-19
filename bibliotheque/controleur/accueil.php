<?php
include "/vue/vueAccueil.php";

$requiser = $bdd->prepare('SELECT * FROM Livre');
$donneesLivres = $bdd->query($requiser);
$selectLivre = $donneesLivres->fetch();

//  Partie d'appel au modèle si besoin 
include "modele/mesFonctionsAccesBDD.php";

// Partie de traitement des données récupérées si besoin pour mise à disposition de la vue


//requet Code
$codeID = $bdd->prepare('SELECT codelivre FROM livre');
$donneesId = $bdd->query($codeID);
$selectId = $donneesId->fetch();

//requetes titre
$codeTitre = $bdd->prepare('SELECT titre FROM livre');
$donnesTitre = $bdd->query($codeTitre);
$selectTitre = $donnesTitre->fetch();

//requetes Resume
$codeResume = $bdd->prepare('SELECT resume FROM livre');
$donneesResume = $bdd->query($donneesResume);
$selectResume = $donneesResume->fetch();


//requete Livres
$requiser = $bdd->prepare('SELECT * FROM Livre');
$donneesLivres = $bdd->query($requiser);
$selectLivre = $donneesLivres->fetch();

//requetes auteurs
$codeAuteur = $bdd->prepare('SELECT* FROM auteur');
$donneesAuteur = $bdd->query($donneesAuteur);
$selectAuteur = $donneesAuteur->fetch();

// appel du script de vue qui permet de gerer l'affichage des donnees
include "vue/vueChercher.php";

?>
