<?php
include "vue/vueAcceuil.php";

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


$requete_detail_livre = $bdd->prepare('SELECT * From bibliotheque Where id_livre = :id');
$requete_auteur = $bdd->prepare('SELECT * From auteur Where auteur  id_auteur = :id');

echo $_SESSION[auteu]
?>

