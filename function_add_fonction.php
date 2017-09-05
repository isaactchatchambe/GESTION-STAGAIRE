<?php
include('includes/config.php');

$libelleFonction=$_POST['libelleFonction'];
if(empty($_POST['libelleFonction']))

    {
        
    	?>
    <SCRIPT LANGUAGE="JAVASCRIPT"> alert
        ("Vous devez remplir les champs svp!"); 
    </SCRIPT>

    <?php
                    //redirection en cas de non soumission
    		echo '<meta http-equiv="refresh" content="0; URL=encadreurs.php">';
    }else {            
                            $enter="INSERT INTO fonctions(libelleFonction)
                                    VALUES(:libelleFonction)";
                            $requete=$connexion->prepare($enter);

                            $requete->execute(array(
                                        'libelleFonction'=>$libelleFonction 
                                        ));
                            ?>
            <SCRIPT LANGUAGE="JAVASCRIPT"> alert("Stagiaire enregistre avec succes!");</SCRIPT>
            <?php echo '<meta http-equiv="refresh" content="0; URL=encadreurs.php">';
            
        }
    

?>