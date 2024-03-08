<?php

//  Partie d'appel au modèle si besoin 
session_start();
include 'includes/db.php';


// Partie de traitement des données récupérées si besoin pour mise à disposition de la vue




// appel du script de vue qui permet de gerer l'affichage des donnees
include "/vue/vueProfil.php";
?>