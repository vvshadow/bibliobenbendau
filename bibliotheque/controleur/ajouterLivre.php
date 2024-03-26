<?php
include 'mesFonctionsAccesBDD.php';
$bdd=connexionBDD();
if(isset($_POST['ajouter'])) {
    $Titre = htmlspecialchars($_POST["Titre"]);
   $Auteur = htmlspecialchars($_POST["Auteur"]);
   $resume = htmlspecialchars($_POST["Resume"]);
   $img = $_POST["image"];
   $sortie = htmlspecialchars($_POST["sortie"]);
   if(!empty($_POST["Titre"]) AND !empty($_POST["Auteur"]) AND !empty($_POST["Resume"]) AND !empty($_POST["image"]) AND !empty($_POST["sortie"])) {

    $user = $bdd->prepare("INSERT INTO livre(Titre, Auteur, resume, img, sortie) VALUES(?, ?, ?, ?, ?)");
    $user->execute(array($Titre, $Auteur, $Resume, $img, $sortie));
    $valide = "Cett.";
}}

if(isset($erreur)) {
    echo '<font color="red">' .$erreur."</font>";
}
if(isset($valide)) {
    echo '<font color="green">' .$valide."</font>";
}
else {
    header("location: profil.php");
}

 include 'vueAjouter.php';
?>