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
 //   return $ObjConnexion;

};


//appelle de la fonction recherche
//$s = recherche();


/*
function recherche($bdd, $titre, $genre, $sortie, $auteur) {
    // Initialisation de la requête SQL
    $sql = "SELECT * FROM livre WHERE ";


    $conditions = array();
    if (!empty($titre)) {
        $conditions[] = "titre LIKE '%$titre%'";
    }
    if (!empty($genre)) {
        $conditions[] = "genre = '$genre'";
    }
    if (!empty($sortie)) {
        // format de la date 
        $sortie = date('Y-m-d', strtotime($sortie));
        $conditions[] = "annesortie = '$sortie'";
    }
    if (!empty($auteur)) {
        $conditions[] = "auteur = '$auteur'";
    }

    // Ajout des conditions a la requete sql
    $sql .= implode(" AND ", $conditions);

    // Exécution de la requête SQL
    $resultats = $bdd->query($sql);


    return $resultats;
}

// Utilisation de la fonction recheche
if (isset($_GET['titre']) && isset($_GET['genre']) && isset($_GET['sortie']) && isset($_GET['auteur'])) {
    $tit = htmlspecialchars($_GET['titre']);
    $genre = htmlspecialchars($_GET['genre']);
    $sortie = htmlspecialchars($_GET['sortie']);
    $auteur = htmlspecialchars($_GET['auteur']);

    $resultatsRecherche = recherche($bdd, $tit, $genre, $sortie, $auteur);
};
*/

$alldemande = $bdd->query("SELECT * FROM Livres WHERE 1=1");
if(isset($_GET['titre'])){
    $tit = htmlspecialchars($_GET['titre']);
    $alldemande = $bdd->query('SELECT titre FROM Livres');
}
elseif(isset($_GET['genre'])){
    $genre = htmlspecialchars($_GET['genre']);
    $alldemande = $bdd->query('SELECT genre FROM Livres');
}
elseif(isset($_GET['sortie'])){
    $sortie = htmlspecialchars($_GET['sortie']);
    $alldemande = $bdd->query('SELECT sortie FROM Livres');
}
elseif(isset($_GET['auteur'])){
    $auteur = htmlspecialchars($_GET['auteur']);
    $alldemande = $bdd->query('SELECT auteur FROM Livres');
}
else{
    $alldemande = $bdd->query('SELECT * FROM Livres');
}

include "vue/vueChercher.php";



?>
