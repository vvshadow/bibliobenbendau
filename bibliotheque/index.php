<?php
   
    include "inc/header.inc";
    include "controleur/controleurPrincipal.php";
    
    if (isset($_GET["action"])) {
        $action = $_GET["action"];
    } else {
        $action = "index";
    }

    $fichier = controleurPrincipal($action);

    include "controleur/$fichier";
    include "inc/footer.inc";

?>