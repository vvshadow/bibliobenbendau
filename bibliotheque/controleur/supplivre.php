<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un livre</title>
</head>
<body>
    <?php 
    session_start();
    $bdd = new PDO("mysql:host=10.23.216.21;dbname=bibliotheque", "bibliotheque", "meSdEkETU2m5i}!");
    if(isset($_SESSION['d']))
    {
        $getid = intval($_GET['codelivre']);

        $requser = $bdd->prepare('SELECT * FROM livre WHERE codelivre = ?');
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();

        $sql = $bdd->query("DELETE FROM livre WHERE codelivre = '$getid'");
        if($sql)
        {
            echo "";
        }
    ?>
      <div class="wrapper">
    <div class="typing-demo">
<h1> Le livre '"<?php echo $userinfo["titre"]?>" à bien était supprimer</h1>
</div></div>
 <?php
 } else{
      header("location : index.php");
  }
   ?>
    
</body>
</html>