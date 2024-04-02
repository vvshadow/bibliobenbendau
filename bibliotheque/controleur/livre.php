<?php


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
$bdd = connexionBDD();

$sql = "SELECT auteur, titre , resumee, pdf From livres Where id  = '1 '";
$resultat = $conn->query($sql);
if($resultat->num_rows > 0 ){
    while($row = $resultat -> fetch_assoc()){
        echo"<p>Auteur: " . $row['auteur']. "</p>";
        echo"<p>Titre :" .$row["titre"]. "</p>";
        echo"<p>Resume :" .$row["resumee"] . "</p>";
        echo"<p><a href=''>PDF :" .$row["pdf"]."</a></p>
    }
};
    

<<<<<<< HEAD
    try {
        $pdf = new HTML2PDF('p','A4','fr');
        $pdf->pdf->SetAuteur($auteur);
        $pdf->pdf->SetTitle($titre);
        $pdf->pdf->SetSubject($resumee);
        $pdf->pdf->SetKeywords('HTML2PDF, Devis, PHP');
        $pdf->writeHTML($content);
        $pdf->Output('Devis.pdf');
    } catch (HTML2PDF_exception $e) {
        die($e);
    };
    
=======
    }else {
        echo "0 resusltat";
    }

?>
>>>>>>> 0d4b3e4d2f615a44cbbbbd6763f90b51d53f723a
