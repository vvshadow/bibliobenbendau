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

function recherche($bdd, $titre, $genre, $sortie, $auteur) {
    
    $sql = "SELECT * FROM livre WHERE ";

    //
    $conditions = array();
    if (!empty($titre)) {
        $conditions[] = "titre LIKE '%$titre%'";
    }
    if (!empty($genre)) {
        $conditions[] = "genre = '$genre'";
    }
    if (!empty($sortie)) {
        // format date 
        $sortie = date('Y-m-d', strtotime($sortie));
        $conditions[] = "annesortie = '$sortie'";
    }
    if (!empty($auteur)) {
        $conditions[] = "auteur = '$auteur'";
    }

    // on ajoute la condition a la requete sql
    $sql .= implode(" AND ", $conditions);

    // Exécution de la requête SQL
    $resultats = $bdd->query($sql);

    // Retourner les résultats
    return $resultats;
}

// Utilisation de la fonction recherche
if (isset($_GET['titre']) && isset($_GET['genre']) && isset($_GET['sortie']) && isset($_GET['auteur'])) {
    $tit = htmlspecialchars($_GET['titre']);
    $genre = htmlspecialchars($_GET['genre']);
    $sortie = htmlspecialchars($_GET['sortie']);
    $auteur = htmlspecialchars($_GET['auteur']);

    $resultatsRecherche = recherche($bdd, $tit, $genre, $sortie, $auteur);
    
};
?>