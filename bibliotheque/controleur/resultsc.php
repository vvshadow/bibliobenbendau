<?php

//  Partie d'appel au modèle si besoin 


// Partie de traitement des données récupérées si besoin pour mise à disposition de la vue

// Affichage de la recherche
if (isset($resultatsRecherche) && $resultatsRecherche->rowCount() > 0) {
    echo "<h2>Résultats de la recherche :</h2>";
    echo "<ul>";
    while ($row = $resultatsRecherche->fetch()) {
        echo "<li>Titre: " . htmlspecialchars($row['titre']) . "</li>";
        echo "<li>Genre: " . htmlspecialchars($row['genre']) . "</li>";
        echo "<li>Date de sortie: " . htmlspecialchars($row['annesortie']) . "</li>";
        echo "<li>Auteur: " . htmlspecialchars($row['auteur']) . "</li>";
        echo "<br>";
    }
    echo "</ul>";
} else {
    echo "Aucun résultat trouvé.";
}


// appel du script de vue qui permet de gerer l'affichage des donnees
include "vue/vueResultSc.php";
?>