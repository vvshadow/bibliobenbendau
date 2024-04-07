<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    <?php
    session_start();
    $bdd = new PDO("mysql:host=10.23.216.21;dbname=bibliotheque","bibliotheque","meSdEkETU2m5i}!");
    if(isset($_SESSION["d"])){
        $requete = $bdd->query("SELECT * FROM livre");

    
    ?>
    <h1>Liste des livres</h1>
    <table border="1">
        <th>ID</th>
        <th>Auteur</th>
        <th>Titre</th>
        <th>Résumé</th>
        <th>Genre</th>

    <?php 
        while($resultat = $requete->fetch())
        {

        
    ?>   
    <tr>
            <td><?php echo $resultat["codelivre"]; ?></td>
            <td><?php echo $resultat["idauteur"]; ?></td>
            <td><?php echo $resultat["titre"]; ?></td>
            <td><?php echo $resultat["resume"]; ?></td>
            <td><?php echo $resultat["genre"];  ?></td>
            <td><div class="supp">
                <a href="supplivre.php?codelivre=<?= $resultat["codelivre"]?>"><img src="logo.png">
                </a>
            </div></td>
            <?php 
        } ?>

    </tr>
    </table>
    <?php } else{
        header("location : index.php");
    } ?>
</body>
</html>