<?php
include('includes/config.php');


$libele_serv=$_POST['libele_serv'];

$chefservice=$_POST['chefdeservice'];

if(empty($_POST['libele_serv']) || empty($_POST['chefdeservice']))

{
    
	?>
<SCRIPT LANGUAGE="JAVASCRIPT"> alert
    ("Vous devez remplir les champs svp!"); 
</SCRIPT>

<?php
		echo '<meta http-equiv="refresh" content="0; URL=ajoutTTTservice.php">';//redirection
}
else
{
    $requete=$connexion->prepare("SELECT * FROM services 
    WHERE libelleserv=?"); 
    
    $requete->execute(array($libele_serv));
    
			$data=$requete->fetch();
        if ($data)
            
        {
        echo '<body onLoad="alert(\'Service existant!\')">';
		echo '<meta http-equiv="refresh" content="0;URL=ajoutTTTservice.php">';    
        }
    
    

        else
        {
            
                
                    
$enter="INSERT INTO services(libelleserv,chefserv)  VALUES(:libelleserv,:chefserv)";
$requete=$connexion->prepare($enter);

$requete->execute(array(
                   
                        'libelleserv'=>$libele_serv,
                        'chefserv'=>$chefservice,
                     
                        ));
                
                    ?><SCRIPT LANGUAGE="JAVASCRIPT"> alert("Service enregistre avec succes!");</SCRIPT>
<?php echo '<meta http-equiv="refresh" content="0; URL=ajoutTTTservice.php">'; }

}
?>