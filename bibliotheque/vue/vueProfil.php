<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Mes O.B.J</a></li>
			<li><a href="#">Ajoutez livre</a></li>
			<li><a href="#">Suggestion</a></li>
                        <li><a href="#">Contact</a></li>
		  </ul>
                  <br><br>
<div align="center">


        <div class="box">
    <div align="left">

           <div class="image"> 
            
            <h1> Profil de <?php echo $_SESSION['nom'];?> </h1>
            <img src="img/edt.png" height="150px"width="150px" >
</div>


           
        <div align="right">
    <h3>Pseudo = <?php echo $_SESSION['nom']?> </h3> 
    <h3>E-mail = <?php echo $_SESSION['mail']?></h3> 
    <h3>Mot de passe = <?php echo $_SESSION['mdp']?></h3> 
    <h3>Liste d'objectif = <?php echo $_SESSION['d']?></h3> <br></div>
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
