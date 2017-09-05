<?php
include('includes/config.php');

$fonction=$_POST['fonction'];
$nom_ecad=$_POST['nom_ecad'];
$post_nom=$_POST['post_nom'];
$sexe=$_POST['sexe'];
$tel=$_POST['tel'];


if(empty($_POST['fonction']) || empty($_POST['nom_ecad']) || empty($_POST['post_nom']) ||
   empty($_POST['sexe']) || empty($_POST['tel']))

    {
        
    	?>
    <SCRIPT LANGUAGE="JAVASCRIPT"> alert
        ("Vous devez remplir les champs svp!"); 
    </SCRIPT>

    <?php
                    //redirection en cas de non soumission
    		echo '<meta http-equiv="refresh" content="0; URL=encadreurs.php">';
    }else {            
                            $enter="INSERT INTO encadreurs(codeFonction,nomenc,prenomenc, sexe,telephone)
                                    VALUES(:codeFonction,:nomenc,:prenomenc,:sexe,:telephone)";
                            $requete=$connexion->prepare($enter);

                            $requete->execute(array(
                                        'codeFonction'=>$fonction,
                                        'nomenc'=>$nom_ecad,
                                        'prenomenc'=>$post_nom,
                                        'sexe'=>$sexe,
                                        'telephone'=>$tel 
                                        ));
                            ?>
            <SCRIPT LANGUAGE="JAVASCRIPT"> alert("Stagiaire enregistre avec succes!");</SCRIPT>
            <?php echo '<meta http-equiv="refresh" content="0; URL=encadreurs.php">';
            
        }
    

?>