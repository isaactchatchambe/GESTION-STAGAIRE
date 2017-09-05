<?php
/*$hostname='localhost';
$user='root';
$password='';
$dbase='dbstagiaires';
try{
    $connexion = new PDO("mysql:host=localhost;dbname=dbstagiaires", $user, $password) ;
    $connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
    echo'Erreur est au niveau de :'.$e->getMessage();
}

    $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)'); $req->execute(array( 'nom' => $nom, 'possesseur' => $possesseur, 'console' => $console, 'prix' => $prix, 'nbre_joueurs_max' => $nbre_joueurs_max, 'commentaires' => $commentaires ))


/*$titre= 'Gestion des stagiaires';


 $entre = $connexion ->exec('INSERT INTO encadreurs(prenomenc,nomenc) VALUES(\'thierry\',\'Eva\')');*/
        
        
        
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;    
    $connexion = new PDO('mysql:host=localhost;dbname=dbstagiaires', 'root', '', $pdo_options); /*
    // On ajoute une entrée dans la table jeux_video    
    $bdd->exec('INSERT INTO encadreurs(prenomenc, nomenc) VALUES(\'Battlefield 1942\', \'Patrick\')');       
    echo 'bien qjouter !';*/
} catch(Exception $e) {   
    die('Erreur : '.$e->getMessage());
    
}
                    
?>
