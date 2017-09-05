<?php
session_start();
include('includes/config.php');
if (isset($_SESSION['login']) || isset($_SESSION['password'])){
?>
<html>
<head>
	<title>Gestion des stagiaires</title>
	<link href="stylestage.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
	<div><img src="images/stagiaires1.jpg"  id="entete" /></div>
	<div style="margin-bottom:3px;"></div>
	<div id="milieu">
	<div class="menugauche">
		<div class="menu a" style="border-bottom-width:1px; border-bottom-style:solid;" >
		<div style="background-color:gray; color:white; padding:3px;  -moz-border-radius: 5px; -webkit-border-radius: 5px; font-size:16px;"><strong><i>M</i>enu</strong>&nbsp;&nbsp;<a href="gestion.php"><img height="40" width="30" src="images/house.gif" alt="Accueil" /></a></div>
			<div style="margin-bottom:5px;"></div>
			<div class="lienmenu"><a href="stagiaires.php">&nbsp;&nbsp;<strong>Stagiaires</strong></a></div>
			<div style="margin-bottom:2px;"></div>
			<div class="lienmenu"><a href="encadreurs.php">&nbsp;&nbsp;<strong>Encadreurs</strong></a></div>
			<div style="margin-bottom:2px;"></div>
			<div class="lienmenu"><a href="visites.php">&nbsp;&nbsp;<strong>Visites</strong></a></div>
			<div style="margin-bottom:2px;"></div>
			<div class="lienmenu"><a href="services.php">&nbsp;&nbsp;<strong>Services</strong></a></div>
			<div style="margin-bottom:2px;"></div>
			<div class="lienmenu"><a href="fonction.php">&nbsp;&nbsp;<strong>Fonctions</strong></a></div>
		<br />
		
		</div><br />
		<div>
			Utilisateur connect&eacute;<br /><br />
			<span style="color:red; font-family:arial; font-size:16px;"><?php echo ucfirst($_SESSION['prenom'])."  ".ucfirst($_SESSION['nomuser']);?></span><br /><br /><br /><br /><br /><br /><br />
			<a href="logout.php">Deconnexion</a>
		</div>
		<br /><br /><br /><br /><br /><br /><br />
	</div>
	<div id="contenu1"> 
		<div class="menu a">
		<span class="menutop"><a href="encadreurs.php">&nbsp;&nbsp;<strong>Ajouter un encadreur</strong>&nbsp;&nbsp;</a></span>&nbsp;|
		
		<span class="menutop"><a href="liste_encadreur.php">&nbsp;&nbsp;<strong>Liste des encadreurs</strong>&nbsp;&nbsp;</a></span>
		</div>
		<img src="images/ajouter_stagiaire.jpg" style="border:1px solid gray; height:80px; width:520px;"/>
		<div style="border:1px solid gray; width:500px; margin-left:auto; margin-right:auto; margin-top:5px; padding:10px;">
		<form name="form" action="function_add_encadreur.php" method="POST">
			<table align="center">
				<tr>
					<td>
						<label for="fonction">Fonction:</label>
					</td>
					<td>
						<select name="fonction" id="codserv" required>
							<option value="">Choisir la fonction</option>
               				<?php       							
  	

								$retour=$connexion->prepare("SELECT * FROM 	fonctions "); 
								$retour->execute();
    
             					// afficher les fonctions
								while($dataa = $retour->fetch())

            						{
            						echo '<option value ="'. $dataa['codeFonction'].'">'.$dataa['libelleFonction'].'</option>';
									
									}
									 ?>

                
						</select>
					</td>
				</tr>
					<td>	<label for="matr">Nom :</label>
					</td>
					<td>


						<input type="text" id="numstag" name="nom_ecad" size="10" maxlength="25" required />

					</td>
				</tr>
				<tr>
					<td>
						<label for="matr">Post-nom:</label>
					</td>
					<td>
						<input type="text" id="numstag" name="post_nom" required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="matr">Sexe:</label>
					</td>
					<td>
						<select id="numstag" name="sexe" required>
							<option>
								Masculin
							</option>
							<option>
								Masculin
							</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="tel">Tél:</label>
					</td>
					<td>
						<input type="tel" id="numstag" name="tel">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Enregistrer">
					</td>
				</tr>




		</table>
		</form></div>
		
		<br /><br />
		

		
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		<a href="gestion.php">Revenir &agrave; la page pr&eacute;c&eacute;dente</a>
	</div>
	</div>
	<div style="margin-bottom:2px; clear:both"></div>
	<div id="pied" > NZKA<br />Copyright 2017-Isaac TCHATCHAMBE. Tout droit reservé;
	</div>
</div>
</body>
</html>
<?php
}
?>