<?php
include "/vue/vueAccueil.php";

$marequete = "SELECT * FROM livre";
$req = $bdd->query($marequete);
$rep = pg_fetch_all($req);

var_dump($rep);
?>