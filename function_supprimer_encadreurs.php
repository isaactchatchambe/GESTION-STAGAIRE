<?php
require 'includes/config.php';
$encadreurs=$_GET['supenc'];


$supProfile=$connexion->prepare("DELETE FROM encadreurs WHERE matricule=? ");
$supProfile->execute(array($encadreurs));


header ('location: liste_stagiaire.php');// redirection
?>