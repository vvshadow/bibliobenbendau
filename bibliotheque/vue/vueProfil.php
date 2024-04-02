<ul>
  <li><a href="#">Mes Livres</a></li>
  <li><a href="../controleur/ajouterLivre.php">Ajoutez livre</a></li>
  <li><a href="#">Suggestion</a></li>
  <li><a href="#">Contact</a></li>
</ul>
<div class="box">
  <div class="image">
    <h1> Profil de <?php echo $_SESSION['nom']; ?> </h1>
    <img src="img/edt.png" height="150px" width="150px">
  </div>
  <h3>Pseudo = <?php echo $_SESSION['nom'] ?> </h3>
  <h3>E-mail = <?php echo $_SESSION['mail'] ?></h3>
  <h3>Liste des livres= <?php echo $_SESSION['d'] ?></h3> <br>
</div>
<div align="center">
  <div class="bt">
    <a href="#"><button class="button" style="vertical-align:middle"><span>Modifier Le Profil</span></button></a>
  </div>
  <div class="bt">
    <a href="#"><button class="button" style="vertical-align:middle"><span>Deconnexion</span></button></a>
  </div>


</div>
</div><br>