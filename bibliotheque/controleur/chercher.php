<?php
include "vue/vueChercher.php";
include "includes/db.php";

//requete Livres
$requiser = $bdd->prepare('SELECT * FROM Livre');
$donneesLivres = $bdd->query($requiser);
$selectLivre = $donneesLivres->fetch();

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

//requetes auteurs
$codeAuteur = $bdd->prepare('SELECT auteur FROM livre');
$donneesAuteur = $bdd->query($donneesAuteur);
$selectAuteur = $donneesAuteur->fetch();
?>