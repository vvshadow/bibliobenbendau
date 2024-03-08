<ul>
			<li><a href="#">Home</a></li>
			<li><a href="myobj.php">Mes O.B.J</a></li>
			<li><a href="cree.php">Ajoutez Un O.B.J</a></li>
			<li><a href="suggestion.php">Suggestion</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li></li>
		  </ul><br><br>
<div align="center">


        <div class="box">
    <div align="left">

           <div class="image"> 
            
            <h1> Profil de <?php echo $_SESSION['pseudo'];?> </h1>
            <img src="img/edt.png" height="150px"width="150px" >
</div>


           
        <div align="right">
    <h3>Pseudo = <?php echo $_SESSION['pseudo']?> </h3> 
    <h3>E-mail = <?php echo $_SESSION['mail']?></h3> 
    <h3>Mot de passe = <?php echo $_SESSION['mdp']?></h3> 
    <h3>Liste d'objectif = <?php echo $_SESSION['id']?></h3> <br></div>
    <div align="center">
    <div class="bt">
		<a href="modif-profil.php"><button class="button" style="vertical-align:middle"><span>Modifier Le Profil</span></button></a>
	</div> <div class="bt">
		<a href="deco.php"><button class="button" style="vertical-align:middle"><span>Deconnexion</span></button></a>
	</div>

        </div>
</div>
</div>
</div>
</div><br>
