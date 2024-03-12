<?php
function connexionBDD()
{
    $bdd = 'mysql:host=10.23.216.21;dbname=bibliotheque';
    $user = 'Kyllian';
    $password = 'Kyllian';
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

}
?>