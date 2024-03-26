<section class="afficher_livre">
<?php 
// Affichage des résultats de la recherche
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
?>
</section>