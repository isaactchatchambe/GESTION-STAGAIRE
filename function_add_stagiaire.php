<?php
include('includes/config.php');

$numstag=$_POST['numstag'];
$matr=$_POST['matr'];
$codserv=$_POST['codserv'];
$nomstag=$_POST['nomstag'];
$prenomstag=$_POST['prenomstag'];
$sexe=$_POST['sexe'];


//$debutstage=$_POST['debutstage'];
$debutstage=$_POST['debutstage'];;

//$datenais=$_POST['datenais'];
$datenais=$_POST['datenais'];

//$finstage=$_POST['finstage'];
$finstage=$_POST['finstage'];


$photo=$_FILES['photo']['name'];

if(empty($_POST['numstag']) || empty($_POST['matr']) || empty($_POST['codserv']) ||
   empty($_POST['nomstag']) || empty($_POST['prenomstag']) || empty($_POST['sexe']))

{
    
	?>
<SCRIPT LANGUAGE="JAVASCRIPT"> alert
    ("Vous devez remplir les champs svp!"); 
</SCRIPT>

<?php
		echo '<meta http-equiv="refresh" content="0; URL=ajoutstagiaire.php">';//redirection
}
else
{
    $requete=$connexion->prepare("SELECT * FROM stagiaires 
    WHERE numstagiaire=?"); 
    
    $requete->execute(array($numstag));
    
			$data=$requete->fetch();
        if ($data)
            
        {
        echo '<body onLoad="alert(\'Stagiaire existant!\')">';
		echo '<meta http-equiv="refresh" content="0;URL=ajoutstagiaire.php">';    
        }
    
    

        else
        {
            $photo= $_FILES['photo']['name'];
            $file_tmp_name= $_FILES['photo']['tmp_name'];
            
            $file_dest='img/'.$photo;
            $file_extension = strrchr($photo,".");
            $extension_autorise= array('.jpeg','.jpg','.png','.JPEG','.JPG','.PNG');
            
            
            if(in_array($file_extension,$extension_autorise))
                
                
            {     if(move_uploaded_file($file_tmp_name,$file_dest))
                {
                
                    
$enter="INSERT INTO stagiaires(numstagiaire,matricule,codeserv,nom,prenom,sexe,datenais,debutstage,finstage,photo)
VALUES(:numstagiaire,:matricule,:codeserv,:nom,:prenom,:sexe,:datenais,:debutstage,:finstage,:photo)";
$requete=$connexion->prepare($enter);

$requete->execute(array(
                    'numstagiaire'=>$numstag,
                        'matricule'=>$matr,
                        'codeserv'=>$codserv,
                        'nom'=>$nomstag,
                        'prenom'=>$prenomstag,
                        'sexe'=>$sexe,
                        'datenais'=>$datenais,
                        'debutstage'=>$debutstage,
                        'finstage'=>$finstage,
                        'photo'=>$file_dest 
                        ));
                

                
                
                    ?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("Stagiaire enregistre avec succes!");</SCRIPT>
<?php echo '<meta http-equiv="refresh" content="0; URL=ajoutstagiaire.php">';
                    
                    
                    
                }
                else
                {
                    echo 'une erreur s4est produite lors de l4enregistrement '; 
                }
            }
            
            
            else{   echo 'veuillez choisir une image'; } 
            
            
               
            
        }
}?>