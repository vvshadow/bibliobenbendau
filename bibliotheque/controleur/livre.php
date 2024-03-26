<?php
include "vue/vueAcceuil.php";

$servername = 'localhost';
$username = 'bibliotheque';
$password = 'meSdEkETU2m5i}!';

//On établit la connexion
$conn = new mysqli($servername, $username, $password);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}
echo 'Connexion réussie';

$requete_detail_livre = $bdd->prepare('SELECT * From bibliotheque Where id_livre = :id');
$requete_auteur = $bdd->prepare('SELECT * From auteur Where auteur  id_auteur = :id');

if($auteur) {
    echo "<p>Auteur : " . $auteur['nom'] . " " . $auteur['prenom'] . "</p>";
} else {
    echo "<p>Auteur non disponible</p>";
}
else {
echo "<p>Livre non trouvé</p>";
}
 else {
echo "<p>Identifiant du livre non spécifié</p>";
}

?>
