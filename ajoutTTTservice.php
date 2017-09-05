<?php
session_start();
include('calendrier.html');
include('includes/config.php');
if (isset($_SESSION['login']) || isset($_SESSION['password']))

?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion des Services</title>
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
		<span class="menutop"><a href="ajoutstagiaire.php">&nbsp;&nbsp;<strong>Ajouter un Service</strong>
		<span class="menutop"><a href="liste_stagiaire.php">&nbsp;&nbsp;<strong>Liste des Servicess</strong>&nbsp;&nbsp;</a></span>
		</div><br />
		<img src="images/ajouter_stagiaire.jpg" style="border:1px solid gray; height:80px; width:520px;"/>
		<div style="border:1px solid gray; width:500px; margin-left:auto; margin-right:auto; margin-top:5px; padding:10px;">
            
            
		<form name="form"  method="POST" action="functionservice.php" enctype="multipart/form-data" >
            
            
            <table align="center">
                
			<tr>
                <td>
                    <label for="libele_serv">Libelle:</label>
                </td><td><input type="text" id="prenomstag" name="libele_serv" size="20" maxlength="20" /></td>
            </tr>		
			
			<tr>
                <td>
                    <label for="debutstag">Chef de Service:</label>
                </td>
                <td>
                    <input type="text" name="chefdeservice" id="debutstage" class="clendrie" />
                </td>
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
		D&eacute;v&eacute;lopp&eacute;e par IsaacSoft<br />Copyright 2017-Isaac TCHATCHAMBE. Tout droit reserv&eacute;
	</div>
</div>
</body>
</html>