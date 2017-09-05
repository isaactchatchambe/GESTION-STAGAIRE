<?php
session_start ();
$loginOK=false;
include('includes/config.php');

$login = trim($_POST['user']);
$password = trim($_POST['pwd']); 

 
if (empty($_POST['user']) || empty($_POST['pwd']))
{ 
echo'<body onLoad="alert(\'Vous devez verifier le formulaire authentification...\')">';
echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}

else{
    
$query = $connexion->prepare("SELECT * FROM utilisateur where login=? and password= ? ");
    
$query->execute(array($login,$password));
    
while($data=$query->fetch())
    
    
{ 
    if($data['password']==$password && $data['login']==$login)
    {
        
         $_SESSION['nomuser']=$data['nomuser'];
        $_SESSION['prenom']=$data['prenom'];
        $_SESSION['login']=$data['login'];
        $_SESSION['password']=$data['password'];
    
        header('location:gestion.php');
        
    }
    else
    {
       echo'<body onLoad="alert(\'Vos identifiants sont incorrects\')">';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
        echo 'Vos identifiants sont incorrects';
        
    }
    

}
    }
