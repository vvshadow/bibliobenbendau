<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["chercher"] = "chercher.php";
    $lesActions["contact"] = "contact.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["ajouterLivre"] = "ajouterLivre.php";
    $lesActions["resultsc"] = "resultsc.php";
    $lesActions["livre"] = "livre2.0.php";
    
    
    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}
?>