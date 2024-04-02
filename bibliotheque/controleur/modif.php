<?php
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

class livecontroler {
    public function afficherFormulaireModification($idLivre) {
       
        require_once('modele/livreModel.php');
        $livre =  $livremodel :: getLivreById($idLivre);
       
        require_once('vue/header.php');
        require_once('vue/formulaireModificationLivre.php');
        require_once('/vue/footer.php');
    }


   
    public function modifierLivre($idLivre, $nouveauxTitre, $nouveauxAuteur, $nouvelleDateSortie, $nouvelleCotation) {
            for ($i=0; $i < 5; $i++) {
               $idLivre = readline("Commande : ");
               $nouveauxTitre = readline("Commande : ");
               $nouveauxAuteur = readline("Commande : ");
               $nouveauxAuteur = readline("Commande : ");
               $nouvelleCotation = readline("Commande : ");

                readline_add_history($idLivre, $nouveauxTitre, $nouveauxAuteur, $nouvelleDateSortie, $nouvelleCotation);
        }
    
        // Liste l'historique
        print_r(readline_list_history());
    
        // Liste les variables
        print_r(readline_info());


        require_once('modele/livreModel.php');
        $resultat= $livreModel::modifierLivre($idLivre, $nouveauxTitre, $nouveauxAuteur, $nouvelleDateSortie, $nouvelleCotation);
       
        if ($resultat) {
           
            header('Location: index.php?messsage=modification_reuussie');
        } else {
            

            header('Location: index.php?message=modification_echec');
        }
    }
}
include "/vue/vueModif.php";

?>
