<?php
include "vue/vueAcceuil.php";

function connexionBDD()
{
    $db = 'mysql:host=10.23.216.213;dbname=dblogin5260';
    $user = 'login5260';
    $password = 'rIgUUppFtMTdpFs';
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


$sql = "SELECT auteur, titre , resumee From livres Where id  = '1 '";
$resultat = $conn->query($sql);
if($resultat->num_rows > 0 ){
    while($row = $resultat -> fetch_assoc()){
        echo"<p>Auteur: " . $row["auteur"]. "</p>";
        echo"<p>Titre :" .$row["titre"]. "</p>";
        echo"<p>Resume :" .$row["resumee"] . "</p>";
    }
    

    }else {
        echo "0 resusltat";
    }

?>
