<?php
session_start();
require 'includes/config.php';
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
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	</div>
	<div id="contenu1"> 
		<div class="menu a">
		<span class="menutop"><a href="encadreurs.php">&nbsp;&nbsp;<strong>Ajouter un encadreurs</strong>&nbsp;&nbsp;</a></span>&nbsp;|
		
		<span class="menutop"><a href="liste_encadreur.php">&nbsp;&nbsp;<strong>Liste des encadreurs</strong>&nbsp;&nbsp;</a></span>
		</div><br />
		<img src="images/liste_stagiaire.jpg" style="border:1px solid gray; height:80px; width:620px;"/>
		<div style="border:1px solid gray; width:600px; margin-left:auto; margin-right:auto; margin-top:5px; padding:10px;">
		<center>
		<table border=1 style="font-size:13px; text-align:center; font-family:palatino Linotype; color:black;">
		<tr>
		<th >Nom </th>
		<th>Post-nom</th>
		<th>Sexe</th>
		<th>Télephone</th>
		<th>Supprimer</th>           
            
		<?php
		$recherche=
            "SELECT * FROM
            encadreurs
            order by nomenc";
                                                               
		$resultat_recherche=$connexion->prepare($recherche);
        $resultat_recherche->execute();
                                                               
		while($data=$resultat_recherche->fetch())
            
            
        
        {
		echo'<tr>';
		echo'<td>'.$data['nomenc'].
		'</td><td>'.$data['prenomenc'].
		'</td><td>'.$data['sexe'].
		'</td><td>'.$data['telephone'].
		'</td><td>
		<a href="function_supprimer_encadreurs.php?supenc='.$data['matricule'].'" onclick="return(confirm(\'Etes-vous sur de vouloir supprimer ce stagiaire?\'));" >Supprimer</a></td>';

		echo'</tr>';
		}
		?>
		</table></center>
		<br /><br />
		</div>
		
		<br /><br /><br /><br /><br />
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
<?php
}
else{
	echo'<meta http-equiv="refresh" content="0; URL=echec_cnx.html">';}
?>