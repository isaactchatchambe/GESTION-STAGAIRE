<?php
require 'includes/config.php';
$numstagiaire=$_GET['suppstag'];


$supProfile=$connexion->prepare("DELETE FROM stagiaires WHERE numstagiaire=? ");
$supProfile->execute(array($numstagiaire));


header ('location: liste_stagiaire.php');// redirection
?>