<?php

//  Partie d'appel au modèle si besoin 
include "includes/db.php";

// Partie de traitement des données récupérées si besoin pour mise à disposition de la vue




//requete Livres
$requiser = $bdd->prepare('SELECT * FROM Livre');
$donneesLivres = $bdd->query($requiser);
$selectLivre = $donneesLivres->fetch();

//requetes codeLivres
$codeLivre = $bdd->prepare('SELECT * FROM codelivre');
$donneesCodes = $bdd->query($codeLivre);
$selectCode = $donneesCodes->fetch();

//requetes titre
$codeTitre = $bdd->prepare('SELECT * FROM titre');
$donnesTitre = $bdd->query($codeTitre);
$selectTitre = $donnesTitre->fetch();

//requetes Resume
$codeResume = $bdd->prepare('SELECT * FROM resume');
$donneesResume = $bdd->query($donneesResume);
$selectResume = $donneesResume->fetch();

//requetes auteurs
$codeAuteur = $bdd->prepare('SELECT* FROM auteur');
$donneesAuteur = $bdd->query($donneesAuteur);
$selectAuteur = $donneesAuteur->fetch();

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



// appel du script de vue qui permet de gerer l'affichage des donnees
include "vue/vueChercher.php";
?>