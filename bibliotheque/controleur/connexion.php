<?php

//  Partie d'appel au modèle si besoin
session_start();
include 'modele/db.php';

 


// Partie de traitement des données récupérées si besoin pour mise à disposition de la vue
if(isset($_POST['formconnect'])) {
    $mailco = htmlspecialchars($_POST['mailco']);
    $mdpco =    $_POST['mdpco'];

    if(!empty($_POST["mailco"]) AND !empty($_POST["mdpco"]))
    {
        $requser = $bdd->prepare("SELECT * FROM user WHERE mail = ?");
        $requser ->bindValue(1, $mailco, PDO::PARAM_STR);
        $requser->execute();
        $user = $requser->fetch();

        if($user && password_verify($mdpco, $user['mdp'])){
            $_SESSION['d'] = $user['d'];
            $_SESSION['mail'] = $user['mail'];
            $_SESSION['nom'] = $user['nom'];

            header("Location :./index.php?action=profil");
            exit();
        }else{
            $erreur = "Identifiants incorrect";
        }
    }else{
        $erreur = 'Les champs ne sont pas tous compléter';
    }
}

if(isset($erreur))
{
    echo '<font color="red">' .$erreur."</font>";
}


// appel du script de vue qui permet de gerer l'affichage des donnees
include "vue/vueConnexion.php";
?>