<?php
session_start();
include('calendrier.html');
include('includes/config.php');
if (isset($_SESSION['login']) || isset($_SESSION['password']))
{
?>
<!DOCTYPE html>
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
			<div class="lienmenu"><a href="services.php">&nbsp;&nbsp;<strong>Services</strong></a></div>
			<div style="margin-bottom:2px;"></div>
			<div class="lienmenu"><a href="fonction.php">&nbsp;&nbsp;<strong>Fonctions</strong></a></div>
		<br />
		
		</div><br />
		<div>
			Utilisateur connect&eacute;<br /><br />
			<span style="color:red; font-family:arial; font-size:16px;">
<?php
 
 echo ucfirst($_SESSION['prenom'])."  ".ucfirst($_SESSION['nomuser']);?>
            </span><br /><br /><br /><br /><br /><br /><br />
			<a href="logout.php">Deconnexion</a>
		</div>
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	</div>
	<div id="contenu1"> 
		<div class="menu a">
		<span class="menutop"><a href="ajoutstagiaire.php">&nbsp;&nbsp;<strong>Ajouter un stagiaire</strong>&nbsp;&nbsp;</a></span>&nbsp;|
		<span class="menutop"><a href="chercher_stagiaire.php">&nbsp;&nbsp;<strong>Chercher un stagiaire</strong>&nbsp;&nbsp;</a></span>&nbsp;|
		<span class="menutop"><a href="liste_stagiaire.php">&nbsp;&nbsp;<strong>Liste des stagiaires</strong>&nbsp;&nbsp;</a></span>
		</div><br />
		<img src="images/ajouter_stagiaire.jpg" style="border:1px solid gray; height:80px; width:520px;"/>
		<div style="border:1px solid gray; width:500px; margin-left:auto; margin-right:auto; margin-top:5px; padding:10px;">
		<form name="form" action="function_add_stagiaire.php" method="POST" enctype="multipart/form-data" ><table align="center">
			<tr><td><label for="numstag">Num&eacute;ro stagiaire:</label></td><td><input type="text" id="numstag" name="numstag" size="10" maxlength="7" /></td></tr>
			<tr><td><label for="matr">Matricule encadreur:</label></td><td><select name="matr" id="matr">
                
			<option value="">Choisir l'encadreur</option>
			<?php 
			//charement combo
$retour=$connexion->prepare("SELECT * FROM encadreurs "); 
$retour->execute();
    
             // afficher les matricules
			while($data=$retour->fetch())
                
            {
			echo '<option value="'.$data['matricule'].'">'.$data['nomenc'].'</option>';
			} ?>
			</select></td></tr>
			<tr><td><label for="codserv">Code service:</label></td><td><select name="codserv" id="codserv">
			<option value="">Choisir le service</option>
                <?php
            }
  

$retour=$connexion->prepare("SELECT * FROM services "); 
$retour->execute();
    
             // afficher les matricules
			while($dataa=$retour->fetch())
            { 
echo '<option value="'.$dataa['codeserv'].'">'.$dataa['libelleserv'].'</option>';

			} ?>
                
                
			</select></td></tr>
			<tr><td><label for="nomstag">Nom stagiaire:</label></td><td><input type="text" id="nomstag" name="nomstag" size="20" maxlength="20" /></td></tr>
			<tr><td><label for="prenomstag">Pr&eacute;nom stagiaire:</label></td><td><input type="text" id="prenomstag" name="prenomstag" size="20" maxlength="20" /></td></tr>
			<tr>
			<td>Sexe:</td><td><input type="radio" name="sexe" value="m" id="sexe" checked="checked" /><label>Masculin</label>
			<input type="radio" name="sexe" value="f" id="sexe" /><label>Feminin</label></td>
			</tr>
			
			<tr><td><label for="datenaiss">Date de naissance:</label></td><td><input type="date" name="datenais" id="datenais" /></td></tr>
			
			<tr><td><label for="debutstag">D&eacute;but stage:</label></td><td><input type="date" name="debutstage" id="debutstage" class="clendrie" /></td>
			</tr>
			
			<tr><td><label for="finstag">Fin stage:</label></td><td><input type="date" name="finstage" id="finstage" class="calendrie" /></td></tr>
			
			<tr>
			<td>Photo:</td><td><input type="file" name="photo" id="photo" /></td>
			</tr>
			<tr></tr>
			<tr>
			<td></td>
			<td><input type="submit" value="Enregistrer" name="buttonEnregistrer" />
			<input type="reset" value="Annuler" name="buttonAnnuler" /></td>
			</tr>
		</table>
		</form></div>
		
		<br /><br />
		<a href="stagiaires.php">Revenir &agrave; la page pr&eacute;c&eacute;dente</a>
	</div>
	</div>
	<div style="margin-bottom:2px; clear:both"></div>
	<div id="pied" >
		D&eacute;v&eacute;lopp&eacute;e par IsaaSoft<br />Copyright 2017-Isaac TCHATCHAMBE. Tout droit reserv&eacute;
	</div>
</div>
</body>
</html>