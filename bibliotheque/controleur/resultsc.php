<?php

//  Partie d'appel au modèle si besoin 
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


// Partie de traitement des données récupérées si besoin pour mise à disposition de la vue




// appel du script de vue qui permet de gerer l'affichage des donnees
include "vue/vueResultSc.php";
?>