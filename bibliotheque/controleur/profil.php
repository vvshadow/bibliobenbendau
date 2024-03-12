<?php

//  Partie d'appel au modèle si besoin 
session_start();
include 'modele/db.php';


// Partie de traitement des données récupérées si besoin pour mise à disposition de la vue
if(isset($_SESSION['d']))
{


    $requser = $bdd->prepare('SELECT * FROM user WHERE d = ?');
    $requser->execute(array($_SESSION['d']));
    $userinfo = $requser->fetch();
} else {
    header("location:./index.php?action=accueil");
}



// appel du script de vue qui permet de gerer l'affichage des donnees
include "/vue/vueProfil.php";
?>