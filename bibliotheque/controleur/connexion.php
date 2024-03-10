<?php

//  Partie d'appel au modèle si besoin
session_start();
include 'includes/db.php';

 


// Partie de traitement des données récupérées si besoin pour mise à disposition de la vue
if(isset($_POST['formconnect'])) {
    $mailco = htmlspecialchars($_POST['mailco']);
    $mdpco =    sha1($_POST['mdpco']);
}
if(isset($_POST['formconnect'])){
    if(!empty($_POST["mailco"]) AND !empty($_POST["mdpco"]))
    {
        $requser = $bdd->prepare("SELECT * FROM user WHERE mail = ? AND mdp = ?");
        $requser->execute(array($mailco, $_POST["mdpco"]));
        $userexist = $requser->rowCount();
        if($userexist == 1){
            $userinfo = $requser->fetch();
            $_SESSION['d'] = $userinfo['d'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['mdp'] = $userinfo['mdp'];
            $_SESSION['nom'] = $userinfo['nom'];

            header("Location : vue/vueProfil.php");
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