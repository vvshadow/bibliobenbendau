<?php

function connexionBDD()
{
    $db = 'mysql:host=10.23.216.21;dbname=bibliotheque';
    $user = 'bibliotheque';
    $password = 'meSdEkETU2m5i}!';
    try {
        $ObjConnexion = new PDO(
            $db,
            $user,
            $password,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )
        );
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
};

$requiser = $bdd->prepare('SELECT * FROM Livre');
$donneesLivres = $bdd->query($requiser);
$selectLivre = $donneesLivres->fetch();

//  Partie d'appel au modèle si besoin 

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
include "vue/vueAccueil.php";
