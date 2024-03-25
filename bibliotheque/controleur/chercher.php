<?php
<<<<<<< HEAD
function connexionBDD()
{
    $bdd = 'mysql:host=10.23.216.21;dbname=bibliotheque';
    $user = 'bibliotheque';
    $password = 'meSdEkETU2m5i!';
    try {
        $ObjConnexion = new PDO(
            $bdd,
            $user,
            $password,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )
        );
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $ObjConnexion;
=======
include "modele/mesFonctionsAccesBDD.php";
>>>>>>> b33cffaa7fd0aba35fbf4374f2071f0b4187ac72

}
$alldemande = $bdd->query("SELECT * FROM users ORDER BY id DESC");
if(isset($_GET['titre']) && !empty($_GET['genre']) && !empty($_GET['sortie']) && !empty($_GET['auteur'])) {
   $tit = htmlspecialchars($_GET['titre']);
   $genre = htmlspecialchars($_GET['genre']);
   $sortie = htmlspecialchars($_GET['sortie']);
   $auteur = htmlspecialchars($_GET['auteur']);
   $alldemande = $bdd->query('SELECT titre , genre, annesortie FROM livre WHERE ');
}







// ancien  code
// $sql = "SELECT * FROM livres WHERE titre LIKE '%$titre%' AND genre LIKE '%$genre%'";


// $resultat = $connexion->query($sql);


<<<<<<< HEAD
// $connexion->close();
=======
$connexion->close();
include "/vue/vueChercher.php";
>>>>>>> b33cffaa7fd0aba35fbf4374f2071f0b4187ac72

?>
